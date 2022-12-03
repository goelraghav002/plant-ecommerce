<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "plantshop";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(mysqli_connect_error()){
        die( "Could Not Connect to database");
    }

?>