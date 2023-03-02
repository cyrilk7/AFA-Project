<!DOCTYPE html>
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/styles.css">
<html>
    <style>
        body{
            color: yellow;
        }
    </style>
    <body>
    <h2>Welcome to the Update page</h2>
    <!-- Redirect to this page 
        Display a form with the information that had been entered as value/placeholder
        Collect new info and update it
        Display a success message*
    Redirect to team profile page -->
    <?php
    if (isset($_GET['update'])){
        echo "Player ID identified: ".$_GET['updatePlayerID'];
        echo "<br>";

        $selectedPlayerID = $_GET['updatePlayerID'];

        //Setup database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "afa_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn -> connect_error){
            die("Error encountered - ".$conn->connect_error);
        }
        else{
            echo "<h1>Database connection is good to go </h1>";

                $playerFirstName = $_GET['fname'];
                $playerLastName = $_GET['lname'];
                $playerPosition = $_GET['position'];
                $playerTeamID = $_GET['teamID'];
                $originalTeamID = $_GET['originalTeamID'];

            //Update sql query
            $sql = "UPDATE teammember 
            SET fname = '$playerFirstName',
            lname = '$playerLastName',
            position = '$playerPosition',
            teamID = '$playerTeamID'
            WHERE playerID = $selectedPlayerID
            "
            ;

            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<h3> Insert successful </h3>";
                echo "<br>";
                echo "New Last Name: ".$playerLastName;
                echo "<br>";


            //Redirect back
            //Write if block to send user back to appropriate team page 
            if($originalTeamID === '2'){
                header("Location: Admin_Elite.php?teamid=2");
                exit();
            }

            if($originalTeamID === '3'){
                header("Location: Admin_Kasanoma.php?teamid=3");
                exit();
            }
            
            if($originalTeamID === '4'){
                header("Location: Admin_Highlanders.php?teamid=4");
                exit();
            }

            if($originalTeamID === '5'){
                header("Location: Admin_Legends.php?teamid=5");
                exit();
            }

            if($originalTeamID === '6'){
                header("Location: Admin_Northside.php?teamid=6");
                exit();
            }
            
            
            if($originalTeamID === '7'){
                header("Location: Admin_RedArmy.php?teamid=7");
                exit();
            }

            else{
                echo $originalTeamID;
            }
            
            
                

            
            
        }
    }
}

    ?>
    
    </body>

</html>