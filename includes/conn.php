<?php
$con=mysqli_connect("localhost","root","","plantShop");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
