<?php

    require_once("connect.php");
    
    // delete user with fetched id when delete button is clicked
    // if (isset($_GET['del'])) {
    //     $userId = $_GET['del'];
    //     mysqli_query($conn, "DELETE FROM fixture WHERE fixtureId=$fixtureId");
    //     header('location: fixture.php');
    // }

    // update user with fetched id when update button is clicked
    // if (isset($_GET['edit'])) {
    //     $userId = $_GET['edit'];
    //     mysqli_query($conn, "UPDATE user WHERE userId=$userId");
    //     header('location: addUser.php');
    // }

    // Fetch the row from the database using the ID
    if (isset($_GET['edit'])) {
        $stmt = $pdo->prepare("SELECT * FROM my_table WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the new values from the form
            $newName = $_POST['name'];
            $newEmail = $_POST['email'];

            // Update the row in the database with the new values
            $stmt = $pdo->prepare("UPDATE my_table SET name = ?, email = ? WHERE id = ?");
            $stmt->execute([$newName, $newEmail, $id]);

            // Redirect to the updated row
            header("Location: view.php?id=$id");
            exit();
        }
    }
        ?>
    
    // Process validated user form data
    if (isset($_POST['submit'])){
        $season = $_POST['season'];
        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        // Get the team_img for team1
        $team1_query = "SELECT team_img FROM team WHERE teamId = $team1";
        $team1_result = mysqli_query($conn, $team1_query);
        $team1_row = mysqli_fetch_assoc($team1_result);
        $team1_img = $team1_row['team_img'];

        // Get the team_img for team2
        $team2_query = "SELECT team_img FROM team WHERE teamId = $team2";
        $team2_result = mysqli_query($conn, $team2_query);
        $team2_row = mysqli_fetch_assoc($team2_result);
        $team2_img = $team2_row['team_img'];
       
        $query = "INSERT INTO fixture(seasonId, fTeamImg, fTeamId, sTeamImg, sTeamId, fixtureDate, fixtureTime) 
                VALUES ('$season', '$team1_img', '$team1', '$team2_img', '$team2', '$date', '$time')";
        $newquery = mysqli_query($conn, $query);

        if($newquery) {
            header("Location: fixture.php");
        }
            
    }

?>

