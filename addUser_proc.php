<?php

    require_once("connect.php");
    
    // delete user with fetched id when delete button is clicked
    if (isset($_GET['del'])) {
        $userId = $_GET['del'];
        mysqli_query($conn, "DELETE FROM user WHERE userId=$userId");
        header('location: addUser.php');
    }

    // update user with fetched id when update button is clicked
    // if (isset($_GET['edit'])) {
    //     $userId = $_GET['edit'];
    //     mysqli_query($conn, "UPDATE user WHERE userId=$userId");
    //     header('location: addUser.php');
    // }
    
    // Process validated user form data
    if (isset($_POST['submit'])){
        $fullName = $_POST['fullName'];
        $username = $_POST['username'];
        $userEmail = $_POST['userEmail'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
        $yearGroup = $_POST['yearGroup'];
        $team = $_POST['team'];
        $userimg = $_POST['userimg'];

        // Check if username has been taken
        $sql = "SELECT * FROM user WHERE uname='$username'";
        $result = mysqli_query($conn, $sql);

        $numrows = mysqli_num_rows($result);

        if($numrows == 1){
            header("Location: addUser.php?fail=1");
            return;
        } else{
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO user(fullName, uname, uemail, upass, gender, role, yearGroup, team) 
                    VALUES ('$fullName', '$username', '$userEmail', '$hashedpassword', '$gender', '$role', '$yearGroup', '$team ')";
            $newquery = mysqli_query($conn, $query);
            if($newquery){
                if($role == "coach") {
                    $teamquery = "SELECT teamId FROM team where teamName='$team'";
                    $userquery = "SELECT userId FROM user where uname='$username'";

                    $teamresult = mysqli_query($conn, $teamquery);
                    $userresult = mysqli_query($conn, $userquery);

                    $teamrow = mysqli_fetch_assoc($teamresult);
                    $userrow = mysqli_fetch_assoc($userresult);

                    $teamId = $teamrow['teamId'];
                    $userId = $userrow['userId'];

                    $coachquery = "INSERT INTO coach(teamId, userId, coach_img)
                                VALUES ('$teamId', '$userId', '$userimg')";
                    $submitquery = mysqli_query($conn, $coachquery);
                 
                    if($submitquery) {
                        // echo "Coach account successfully created!";
                        header("Location: addUser.php?success=1");
                    }
                } else {
                    // echo "Admin account successfully created!";
                    header("Location: addUser.php?success=2");
                    // header("Location: addUser.php");
                }
            } else {
                    // echo "Coach account wasn't created!";
                    header("Location: addUser.php?fail=2");
            }
        }
    }

?>

