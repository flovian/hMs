<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Patient</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="Bootstrap/js/jquery.min.js.txt"></script>
    <script src="Bootstrap/js/popper.min.js.txt"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
global $con;
include ("function.php");
if (isset($_POST['childDrug-btn'])){

    $tbname=$_POST['search'];
    $query= "SELECT * FROM children_pharmacytb WHERE  tbname='$tbname'";
    $result=mysqli_query($con,$query);

    echo "<div class='container' style='margin-top: 20px';>
 <img src='images/doc3.jpg' class='card-img-top' >
<div class='card'>
<div class='card-body'><a href='ChildrenPharmacy.php' class='btn btn-light'>Go Back</a></div>
   
    <div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
        <table class='table table-hover'>
            <thead>
            <tr>
            <th>Name of Tablet</th>
            <th>Ref No</th>
            <th>No of Tablets</th>
            <th>Storage</th>
            <th>Issued Date</th>
            <th>Expiry Date</th>
            <th>Side Effects</th>
            </tr>
            </thead>
            <tbody>";
    while ($row=mysqli_fetch_array($result)){
        $tbname=$row['tbname'];
        $ref_no=$row['ref_no'];
        $no_tablet=$row['no_of_tablets'];
        $storage=$row['storage'];
        $issued_date=$row['issued_date'];
        $expDt=$row['expiry_date'];
        $effects=$row['side_effects'];

        echo"<tr>
                <td>$tbname</td> 
                <td>$ref_no</td>
                <td>$no_tablet</td>
                <td>$storage</td>
                <td>$issued_date</td>
                <td>$expDt</td> 
                <td>$effects</td> 

            </tr>";

    }
    echo "</tbody></table></div></div></div>";
}
?>
</body>
</html>