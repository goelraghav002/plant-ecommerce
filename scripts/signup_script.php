<?php
require "../includes/conn.php";
session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);

$first = $_POST['fname'];
$first = mysqli_real_escape_string($con, $first);

$last = $_POST['lname'];
$last = mysqli_real_escape_string($con, $last);

$mobile = $_POST['mobile'];
$mobile = mysqli_real_escape_string($con, $mobile);

$query = "SELECT * from users where email='$email'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num != 0) {

    $m = "Email Already Exists";
    header('location: index.php?error=' . $m);

} else {
    $quer = "INSERT INTO users(email_id,first_name,last_name,password) values('$email','$first','$last','$pass')";
    $quer = "INSERT INTO `users`(`first_name`, `last_name`, `mobile`, `email`, `password`) VALUES ('$first','$last','$mobile','$email','$pass')";
    mysqli_query($con, $quer);

    echo "New record has id: " . mysqli_insert_id($con);
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: ../index.php');
}
?>