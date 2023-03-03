<?php
    // define connection variables
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "afa_db";

    $conn = mysqli_connect($host, $user, $password, $db_name);

    // If connection failed, return error
    if ($conn->connect_error) { 
        die("Connection failed: ". $conn->connect_error);
    } 

?>
