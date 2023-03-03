<?php

// error_reporting(0);

require_once("connect.php");

if(!isset($_POST['submit'])){
    header("Location: login.php");
}

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM user WHERE uname='$username' ";
    $result = mysqli_query($conn, $sql);

    $numrows = mysqli_num_rows($result);

    if($numrows == 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['upass'])){
            session_start();
            // Set session variables if username and password are correct 
            $_SESSION['username'] = $row['uname'];
            $_SESSION['userEmail'] = $row['uemail'];
            $_SESSION['role'] = $row['role'];

            // Get the value of the session variable
            // $session_var = $_SESSION['role'];
            if ($_SESSION['role'] == 'admin') {
                header("Location: adminindex.php");
                exit();
            } else if ($_SESSION['role'] == 'coach') {
                header("Location: coachindex.php");
                exit();
            } else {
                header("Location: login.php");
            }
        } else {
            header("Location: login.php");
        }
    } 
}

?>