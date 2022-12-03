<?php
require "../includes/conn.php";
session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($conn, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($conn, $pass);
$pass = md5($pass);

$name = $_POST['name'];
$name = mysqli_real_escape_string($conn, $name);

$mobile = $_POST['mobile'];
$mobile = mysqli_real_escape_string($conn, $mobile);

$query = "SELECT * from admin where email='$email'";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
if ($num != 0) {

    $m = "Email Already Exists";
    header('location: index.php?error=' . $m);

} else {
    $quer = "INSERT INTO `admin`(`name`, `mobile`, `email`, `password`) VALUES ('$name','$mobile','$email','$pass')";
    mysqli_query($conn, $quer);

    echo "New record has id: " . mysqli_insert_id($conn);
    $user_id = mysqli_insert_id($conn);
    $_SESSION['admin_email'] = $email;
    $_SESSION['admin_id'] = $user_id;
    header('location: ../index.php');
}
?>