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
if (isset($_POST['patSearch-btn'])){

    $contact=$_POST['search'];
    $query= "SELECT * FROM appointmenttb WHERE  contact='$contact'";
    $result=mysqli_query($con,$query);

    echo "<div class='container' style='margin-top: 20px';>
 <img src='images/doc3.jpg' class='card-img-top' >
<div class='card'>
<div class='card-body'><a href='patRecords.php' class='btn btn-light'>Go Back</a></div>
   
    <div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
        <table class='table table-hover'>
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Doctor Appointment </th>
                <th>Payment Status </th>
                <th>D.O.B</th>
                <th>Residence</th>
                <th>Address</th>
                <th>NextKeen</th>
                <th>NHIF.No<th>
            </tr>
            </thead>
            <tbody>";

    while ($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $doctor=$row['doctor'];
        $payment=$row['payment'];
        $dob=$row['dob'];
        $residence=$row['residence'];
        $address=$row['adress'];
        $nextKeen=$row['next_keen'];
        $nhifNo= $row['nhif_no'];

        echo"<tr>
                <td>$fname</td>
                <td>$lname</td>
                <td>$email</td>
                <td>$contact</td>
                <td>$doctor</td>
                <td>$payment</td>
                <td>$dob</td>
                <td>$residence</td>
                <td>$address</td>
                <td>$nextKeen</td>
                <td>$nhifNo</td>

            </tr>";

    }
    echo "</tbody></table></div></div></div>";
}
?>
</body>
</html>
