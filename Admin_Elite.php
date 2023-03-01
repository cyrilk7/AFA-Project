<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css\PlayerStyle.css">

    <title> Profile: Elite </title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="navbar-local">
            <div class="container-local">
                <div class= logobox-local>
                    <img class="logo-local" src="images/Group 1.svg" alt="logo">
                </div>
                <ul class="links-local">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="standings.php">League Tables</a></li>
                    <li><a href="statistics.php">Statistics</a></li>
                    <li><a href="profile.php">Profile</a></li>  
                    <li><a href="media.php">Media Center</a></li>  
                    <li><a href="login.php"><button id="login"> Log In </button>   </a></li>
                    <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                    
                               
                </ul>


            </div>
    </div>



    <div class="profile-top">
        <div class="profile-left">
            <img src="images/elite.png" alt="" id="profile-img" style="margin-right:70px; width:50%; height:55%">

        </div>

        <div class="profile-right">
            <h1> Elite FC</h1>
            <hr id="hr">
        </div>
        
    </div>
    <div style="display:flex">
        <div class="profile-bottom">
            <p> Founded: <span> 2015 </span> </p>
            <p> Head Coach:  <span>Kofi Osei Owusi </span> </p>
            <p> Assistant Coach: <span> John Brends </span> </p>
            <p> Captain: <span> Jordan Boye</span>  </p>
            <p> Number Of Trophies: <span> 3 </span> </p>

        </div>
        <div>
            <img src="images/team.png" alt="" style="margin-left: 100px; height: 90%;">
        </div>
</div>
</body>
<?php
//check if user came through profile page since the teamIDs have been inserted on that 
    if (isset($_GET['teamid'])){
        echo "Team ID identified: ".$_GET['teamid'];
        echo "<br>";

        $selectedTeamID = $_GET['teamid'];

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
            echo "<br>";

            //Select relevant player data (those from this specific team) from the database
            $sql = "SELECT * from teammember WHERE teamID ='$selectedTeamID'";

            $result = mysqli_query($conn, $sql);

            if($result){
                // echo "<h3> Result returned valid values</h3>";
                // echo "<br>";
                
                echo "<content>";
                echo "<h1>Player Name  || Player Position</h1>";

                
                while($row = mysqli_fetch_assoc($result)){
                    $currPlayerID = $row['playerID'];
                    echo '<h3>'.$row['fname'].'  '. $row['lname'].' || '.$row['position'].'
                    <a href = "Delete_player_proc.php?playerID= '.$currPlayerID.'&delete=true">DELETE</a>'
                    . ' ' . '<a href = "Update_player_proc.php?playerID= '.$currPlayerID.'&update=true">UPDATE</a>'
                    . ' ' . '<a href = "Add_player_proc.php?playerID= '.$currPlayerID.'&delete=true">ADD</a>

                    <br><h3>';
                    echo $currPlayerID;


                }
                //<a href = "Delete_player_proc.php?playerID= '.$currPlayerID.'">DELETE</a>
                echo "</content>";

            //    echo" <script type = "text/javascript">
            //     </script>
            //     "
            }
        }
    }
    else{
        echo "Team ID could not be found";
        header("Location: profile.php");
        exit();
    }
?>
</html>