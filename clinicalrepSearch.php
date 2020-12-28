<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search clinical records</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="Bootstrap/js/jquery.min.js.txt"></script>
    <script src="Bootstrap/js/popper.min.js.txt"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
global $con;
include ("function.php");
if (isset($_POST['clinicRep_search'])){

    $contact=$_POST['clinicalSearch'];
    $query= "SELECT * FROM clinic_reporttb WHERE  contact='$contact'";
    $result=mysqli_query($con,$query);

    echo "<div class='container' style='margin-top: 20px';>
 <img src='images/doc3.jpg' class='card-img-top' >
<div class='card'>
<div class='card-body'><a href='clinicalReports.php' class='btn btn-light'>Go Back</a></div>
   
    <div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
        <table class='table table-hover'>
            <thead>
            <tr>
                <th>Full name</th>
                <th>Contact</th>
                <th>Test conducted</th>
                <th>Illness</th>
                <th>Prescription</th>
            </tr>
            </thead>
            <tbody>";

    while ($row=mysqli_fetch_array($result)){
        $name=$row['name'];
        $contact=$row['contact'];
        $test=$row['test'];
        $illness=$row['illness'];
        $prescription=$row['prescription'];


        echo"<tr>
                <td>$name</td>
                <td>$contact</td>
                <td>$test</td>
                <td>$illness</td>
                <td>$prescription</td>
               

            </tr>";

    }
    echo "</tbody></table></div></div></div>";
}
?>
</body>
</html>
