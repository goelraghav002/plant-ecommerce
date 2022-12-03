<?php
require "../includes/conn.php";
session_start();

$email=$_POST['email'];
$email=mysqli_real_escape_string($conn,$email);

$password=$_POST['password'];
$password=mysqli_real_escape_string($conn,$password);
$password=md5($password);

$query="SELECT id,email,password from admin where email='".$email."' and  password='".$password."'";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==0){
    $m = "Please enter correct E-mail id and Password";
    header('location: index.php?errorl='.$m);
}else{
    $row = mysqli_fetch_array($result);
    $_SESSION['admin_email'] = $row['email'];
    $_SESSION['admin_id'] = $row['id'];

    header('location: ../index.php');
}
