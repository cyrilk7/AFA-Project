<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css\PlayerStyle.css">
    <link rel="stylesheet" href="AddVideoStyle.css">

    <title> Profile: Highlanders </title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="navbar-local">
            <div class="container-local">
                <div class= logobox-local>
                    <img class="logo-local" src="images/Group 1.svg" alt="logo">
                </div>
                <ul class="links-local">
                    <li><a href="adminindex.php">Home</a></li>
                    <li><a href="standings.php">League Tables</a></li>
                    <li><a href="statistics.php">Statistics</a></li>
                    <li><a href="Admin_Profile.php">Profile</a></li>  
                    <li><a href="AdminMediaCenter.php">Media Center</a></li>  
                    <li><a href="#"><button id="login"> Edit Profile </button>   </a></li>
                    <li><a href = "#"><button id="addUser" 
                        class="addUser button"> Add Player </button></a></li>
                    <li><a href="Logout.php"><button id="login"> Log Out </button>   </a></li>
                    <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                    
                               
                </ul>


            </div>
    </div>


    <!-- Div containing code for the modal that is triggered when Add Player button is clicked -->
<div>
    <script src="addVideos.js"></script>
        <div id="addUserModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <h2>Add New Player</h2>
            </div>
    
            <div class="modal-body">
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
                  value = "1"
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




    <div class="profile-top">
        <div class="profile-left">
            <img src="images\high.jpg" alt="" id="profile-img" style="padding-right:60px; width: 50%; heiht:50%">

        </div>

        <div class="profile-right">
            <h1> Highlanders FC </h1>
            <hr id="hr">
        </div>
        
    </div>
    <div style="display:flex">
    <div class="profile-bottom">
            <p> Founded: <span id = "Founded-Tag"> 2015 </span> </p>
            <p> Head Coach:  <span id = "HeadCoach-Tag">Kofi Osei Owusi </span> </p>
            <p> Assistant Coach: <span id = "AssistantCoach-Tag"> John Brends </span> </p>
            <p> Captain: <span id = "Captain-Tag"> Jordan Boye</span>  </p>
            <p> Number Of Trophies: <span id = "Trophies-Tag"> 3 </span> </p>

        </div>
        <div>
            <img src="images/team.png" alt="" style="margin-left: 100px; height: 90%;">
        </div>
</div>

<script src="addVideos.js"></script>

</body>
<?php
//check if user came through profile page since the teamIDs have been inserted on that 
    if (isset($_GET['teamid'])){
        // echo "Team ID identified: ".$_GET['teamid'];
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
            // echo "<h1>Database connection is good to go </h1>";
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
                    // echo $currPlayerID;


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