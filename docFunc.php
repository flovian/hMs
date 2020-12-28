<?php
include 'function.php';
if (isset($_POST['doc-login'])){
    $user_name =$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * FROM doc_logindb WHERE username='$user_name' AND password='$password'";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1){

        $_SESSION['username']=$user_name;
        header("Location:docsPanel.php");
    }else{
        header("Location:error.php");
    }
}

