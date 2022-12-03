<?php
require("../includes/conn.php");
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['qty']) && is_numeric($_GET['qty'])) {
    $item_id = $_GET['id'];
    $qty = $_GET['qty'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO `cart`(`product_id`, `user_id`, `qty`) VALUES ('$item_id','$user_id','$qty')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: ../category.php');
}
?>