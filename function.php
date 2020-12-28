<?php
//Connect to db
session_start();
$con=mysqli_connect("localhost","root","","hmsdb");

//CREATE
if (isset($_POST['submit-btn'])){
    $username =$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * FROM logindb WHERE user_name='$username' AND password='$password'";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1){

        $_SESSION['username']=$username;
        header("Location:adminPanel.php");
    }else{
       header("Location:error.php");
    }
}

if (isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $doctor=$_POST['doctor'];
    $payment= $_POST['status'];
    $dob=$_POST['dob'];
    $residence=$_POST['residence'];
    $address=$_POST['address'];
    $nextKeen=$_POST['nextKeen'];
    $nhifNo= $_POST['nhifNo'];


    $query="INSERT INTO appointmenttb(fname,lname,email,contact,doctor,payment,dob,residence,adress,next_keen,nhif_no) VALUES
 ('$fname','$lname','$email','$contact','$doctor','$payment','$dob','$residence','$address','$nextKeen','$nhifNo')";
    $result=mysqli_query($con,$query);

    if ($result) {

//        echo "<script>alert('Appointment registered!!!')</script>";
//        echo '<script>window.open("adminPanel.php","_self")</script>';

        header("Location:appSuccess.php");


    }
}
function get_Patient_details(){
    global $con;
    $query="SELECT * FROM appointmenttb";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
        $f_name=$row['fname'];
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


        echo "<tr>
                <td>$f_name</td> 
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
}

if (isset($_POST['update'])){
    $contact=$_POST['contact'];
    $payment=$_POST['status'];
    $query="UPDATE appointmenttb SET payment='$payment' WHERE contact='$contact'";
    $result=mysqli_query($con,$query);

    if ($result){
        header("Location:update.php");
    }


}
function display_doctors(){
    global $con;
    $query="SELECT * FROM doctorstb";
    $result=mysqli_query($con,$query);

    while ($row=mysqli_fetch_array($result)){

        $name=$row['name'];
        echo '<option value="'.$name.'">'.$name.'</option>';

    }
}
if (isset($_POST['doc-btn'])){

    $name=$_POST['doc-name'];

    $query="INSERT INTO doctorstb(name) VALUES ('$name')";
    $result=mysqli_query($con,$query);

    if ($result){
        header("Location:addDoctor.php");
    }
}
if (isset($_POST['clinicRp-btn'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $test=$_POST['test'];
    $illness=$_POST['illness'];
    $prescription=$_POST['prescription'];

    $query="INSERT INTO clinic_reporttb(name,contact,test,illness,prescription) VALUES ('$name','$contact','$test','$illness','$prescription')";
    $result=mysqli_query($con,$query);
    if ($result){
        echo "Clinical Report Submitted";
        header("Location:clinicalReports.php");
    }
}
function get_clinicalReport(){
    global $con;
    $query="SELECT * FROM clinic_reporttb";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
        $name=$row['name'];
        $contact=$row['contact'];
        $test=$row['test'];
        $illness=$row['illness'];
        $prescription=$row['prescription'];



        echo "<tr>
                <td>$name</td> 
                <td>$contact</td>
                <td>$test</td>
                <td>$illness</td>
                <td>$prescription</td> 

            </tr>";

    }
}
if (isset($_POST['children-btn'])){
    $tbname=$_POST['tbName'];
    $ref_no=$_POST['refNo'];
    $no_tablet=$_POST['tbNo'];
    $storage=$_POST['storage'];
    $issuedDt=$_POST['issuedDt'];
    $expDt=$_POST['expDate'];
    $effects=$_POST['effects'];

    $query="INSERT INTO children_pharmacytb(tbname,ref_no,no_of_tablets,storage,issued_date,expiry_date,side_effects)VALUES
 ('$tbname','$ref_no','$no_tablet','$storage','$issuedDt','$expDt','$effects')";
    $result=mysqli_query($con,$query);

    if ($result){
        header("location:ChildrenPharmacy.php");
    }
}
function get_children_pharmacy(){
    global $con;
    $query="SELECT * FROM children_pharmacytb";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
        $tbname=$row['tbname'];
        $ref_no=$row['ref_no'];
        $no_tablet=$row['no_of_tablets'];
        $storage=$row['storage'];
        $issued_date=$row['issued_date'];
        $expDt=$row['expiry_date'];
        $effects=$row['side_effects'];



        echo "<tr>
               <td>$tbname</td> 
                <td>$ref_no</td>
                <td>$no_tablet</td>
                <td>$storage</td>
                <td>$issued_date</td>
                <td>$expDt</td> 
                <td>$effects</td> 
                

            </tr>";

    }
}
if (isset($_POST['adult-btn'])){
    $tablet_name=$_POST['tbName'];
    $ref_no=$_POST['refNo'];
    $no_tablet=$_POST['tbNo'];
    $storage=$_POST['storage'];
    $issuedDt=$_POST['issuedDt'];
    $expDt=$_POST['expDate'];
    $effects=$_POST['effects'];

    $query="INSERT INTO adults_chemisttb(tbname,ref_no,no_of_tablets,storage,issued_date,expiry_date,side_effects)VALUES
 ('$tablet_name','$ref_no','$no_tablet','$storage','$issuedDt','$expDt','$effects')";
    $result=mysqli_query($con,$query);

    if ($result){
        header("location:AdultsPharmacy.php");
    }


}
function get_adults_chemist(){
    global $con;
    $query="SELECT * FROM adults_chemisttb";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
        $tbname=$row['tbname'];
        $ref_no=$row['ref_no'];
        $no_tablet=$row['no_of_tablets'];
        $storage=$row['storage'];
        $issued_date=$row['issued_date'];
        $expDt=$row['expiry_date'];
        $effects=$row['side_effects'];



        echo "<tr>
                <td>$tbname</td> 
                <td>$ref_no</td>
                <td>$no_tablet</td>
                <td>$storage</td>
                <td>$issued_date</td>
                <td>$expDt</td> 
                <td>$effects</td> 
                

            </tr>";

    }
}



