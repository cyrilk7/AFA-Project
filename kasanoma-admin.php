<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="trial/main.css">
    <link rel="stylesheet" href="./css/PlayerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="AddVideoStyle.css"> -->

    

    <title> Profile: Kasanoma FC </title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<?php
if (isset($_GET['teamid'])){
}
  else{
    echo "Team ID could not be found";
    header("Location: profile.php");
    exit();
}

?>
<body>
    
<div class="header">
    <div class="lowerSection">
            <div class="logoDiv" style="color: white; font-size: 25px">
                <i class="uil uil-football icon" style="font-size: 25px"></i>
                SPORTS+
            </div>
        
        <div class="navBar">
            <ul class="navList">
                <li class="navItem"><a href="adminindex.php" class="navLink">Home</a></li>
                <li class="navItem"><a href="standings.html" class="navLink">LeagueTable</a></li>
                <li class="navItem"><a href="statistics.php" class="navLink">Statistics</a></li>
                <li class="navItem"><a href="profile-admin.php" class="navLink">Profiles</a></li> <!-- add charts so they see team performance -->
                <li class="navItem"><a href="fixture.php" class="navLink">Fixtures</a></li> 
                <li class="navItem"><a href="addUser.php" class="navLink">Users</a></li> 
                <li class="navItem"><a href="media.php" class="navLink">MediaCenter</a></li>
              </ul>
              <div class="button">
                  <a href="logout.php">LOG OUT</a>
              </div>
              <small>*Only club representatives.</small>
        </div>
        <div class="navBarBtn">
            <i class="uil uil-bars icon"></i>
        </div>
    </div>

    </div>


    <div class="modal fade bd-example-modal-sm" tabindex="-1" id="playerModal" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" style="font-size: 40px;"> Players </h1>

                </div>
                <div class="modal-body">

                <?php

    if (isset($_GET['teamid'])){

        if (isset($_GET['teamid'])){


        $selectedTeamID = $_GET['teamid'];

        //Setup database connection
        $servername = "localhost";
        $username = "cyril";
        $password = "5Esame88$";
        $dbname = "afa_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn -> connect_error){
            die("Error encountered - ".$conn->connect_error);
        }
        else{
            // echo "<h1>Database connection is good to go </h1>";
            // echo "<br>";

            //Select relevant player data (those from this specific team) from the database
            $sql = "SELECT * from teammember WHERE teamID ='$selectedTeamID'";

            $result = mysqli_query($conn, $sql);

            if($result){
                // echo "<h3> Result returned valid values</h3>";
                // echo "<br>"

                while($row = mysqli_fetch_assoc($result)){
                    $currPlayerID = $row['playerID'];
                    echo '<div class="player-modal">';
                    echo '<p>' .$row['fname']. '  ' . $row['lname'].' - '.$row['position'].'</p>';
                    echo '<a href = "Update_player_proc.php?playerID= '.$currPlayerID.'&update=true"> <i class="fas fa-edit edit-icon"></i> </a>
                    <a href = "Delete_player_proc.php?playerID= '.$currPlayerID.'&delete=true"> <i class="fas fa-trash edit-icon"></i> </a>';

                    echo "</div>";
                } 
            }
        }
    }
    else{
        echo "Team ID could not be found";
        header("Location: profile.php");
        exit();
    }
    }
?>
                    <!-- form content goes here -->
                </div>
            </div>
        </div>
    </div>







    <div class="profile-top">
        <div class="profile-left">
            <img src="images/kasanoma.png" alt="" id="profile-img" style="padding-right:90px; width: 50%; height:50%" >

        </div>

        <div class="profile-right">
            <h1> Kasanoma FC </h1>
            <hr id="hr">
        </div>
        
    </div>
    <div style="display:flex">
        <div class="profile-bottom">
        <div style="display:flex;" >
                <p> Founded: <span> 2015 </span> </p>
                <div class="icons" style="color:white; padding-top:17px;">
                    <!-- <i class="fas fa-edit edit-icon"></i> -->

                </div>

            </div>

            <div style="display:flex;" >
                <p> Head Coach: <span>Kofi Osei Owusi </span> </p>
                <div class="icons" style="color:white; padding-top:17px;">
                    <!-- <i class="fas fa-edit edit-icon"></i> -->


                </div>

            </div>

            <div style="display:flex;" >
                <p> Assistant Coach: <span> John Brends </span> </p>
                <div class="icons" style="color:white; padding-top:17px;">
                    <!-- <i class="fas fa-edit edit-icon"></i> -->

                </div>

            </div>

            <div style="display:flex;" >
                <p> Captain: <span> Jordan Boye</span> </p>
                <div class="icons" style="color:white; padding-top:17px;">
                    <!-- <i class="fas fa-edit edit-icon"></i> -->

                </div>

            </div>

            <div style="display:flex;" >
                <p> Number Of Trophies: <span> 3 </span> </p>
                <div class="icons" style="color:white; padding-top:17px;">
                    <!-- <i class="fas fa-edit edit-icon"></i> -->

                </div>

            </div>

            <button data-toggle="modal" data-target="#playerModal" class="players"> Players </button>
            <button data-toggle="modal" data-target="#pModal" class="players" style="margin-left:0px;">Add Player</button>

        </div>
        <div>
            <img src="images/team.png" alt="" style="margin-left: 100px; height: 90%;">
        </div>
</div>


<div class="modal fade bd-example-modal-sm" tabindex="-1" id="pModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" style="font-size: 40px; color:black!important;"> Players </h1>

                </div>
                <div class="modal-body"> 
                    <!-- form content goes here -->
                    <form
                name="modalForm"
                method="POST"
                action="Add_player_proc.php"
                class="userFormDiv"
              >
                <!-- Form input boxes -->
                <label class="formLabel"><b> Player First Name </b></label>
                <br />
                <input
                  class="userForm box"
                  type="text"
                  placeholder="First name"
                  name="fname"
                  id = "fname"
                  required
                />
                <br /><br />
    
                <label class="formLabel"><b> Player Last Name </b></label>
                <br />
                <input
                  class="userForm box"
                  type="text"
                  placeholder="Enter the last name"
                  name="lname"
                  id = "lname"
                  required
                />
                <br /><br />
                <label class="formLabel"><b> Player Position</b></label>
                <br />
                <input
                  class="userForm box"
                  type="text"
                  placeholder="Eg. CB, RB or CF"   
                  name="position"
                  id = "position"
                  required
                />
    
                <!-- Hidden input box that will submit the teamID along with the rest of the given information -->
                <input
                  class="userForm box"
                  type="text"
                  name="teamID"
                  id = "teamID"
                  value = "3"
                  hidden
                  required
                />
                
     
               
    
                <div class="center">
                  <button name="vidSubmit" type="submit" class="createAccount button" value="vidSubmit">
                    Add New Player
                  </button>
                </div>
              </form>
                </div>
            </div>
        </div>
    </div>

<!-- <script src="addVideos.js"></script> -->
<script src="./bootstrap/js/bootstrap.js"></script>

</body>
</html>