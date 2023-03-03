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
        echo "Player ID identified: ".$_GET['playerID'];
        echo "<br>";

        $selectedPlayerID = $_GET['playerID'];

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
            echo "<h1>Database connection is good to go </h1>";

            $sql = "SELECT * from teammember WHERE playerID ='$selectedPlayerID'";

            $result = mysqli_query($conn, $sql);

            if($result){
                // echo "<h3> Result returned valid values</h3>";
                // echo "<br>";
                $row = mysqli_fetch_assoc($result);
                
                echo "<br>";
                echo "<h1>Current Player Name = " . $row['fname'] . "</h1>";

                $playerFirstName = $row['fname'];
                $playerLastName = $row['lname'];
                $playerPosition = $row['position'];
                $playerTeamID = $row['teamID']; 
        }
        



    echo '
    <form
                name="modalForm"
                method="GET"
                action="Update_player_proc2.php?playerID= '.$selectedPlayerID.'
                class="userFormDiv"
              >
                <!-- Form input boxes -->
                <label class="formLabel"><b> Player First Name </b></label>
                <br />
                <input
                  class="userForm box"
                  type="text"
                  placeholder= '. $playerFirstName. '
                  value = '. $playerFirstName. '
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
                  placeholder='. $playerLastName. '
                  value = '. $playerLastName. '
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
                  placeholder='. $playerPosition. '
                  value = '. $playerPosition. '
                  name="position"
                  id = "position"
                  required
                />
    
                <br /><br />
                <label class="formLabel"><b> Player Team</b></label>
                <br />
                <select
                  class="userForm box"
                  type="text"
                  name="teamID"
                  id = "teamID"
                  required
                >
                <option name = "Elite" value = "2"> Elite FC </option>
                <option name = "Kasanoma" value = "3"> Kasanoma FC </option>
                <option name = "Highlanders" value = "4"> Highlanders FC </option>
                <option name = "Legends" value = "5"> Legends FC </option>
                <option name = "Northside" value = "6"> Northside FC </option>
                <option name = "Red Army" value = "7"> Red Army FC </option>

                </select>
                <input
                  class="userForm box"
                  type="text"
                  name="update"
                  id = "update"
                  value = "true"
                  hidden
                />
                <input
                  class="userForm box"
                  type="text"
                  name="updatePlayerID"
                  id = "updatePlayerID"
                  value ='.$selectedPlayerID.'
                  hidden
                />

                <!-- This is necessary in order to redirect user from update page, back to the team profile  --> 
                <!-- page they were on -->
                
                <input
                  class="userForm box"
                  type="text"
                  name="originalTeamID"
                  id = "originalTeamID"
                  value ='.$playerTeamID.'
                  hidden
                />

                <div class="center">
                  <button name="vidSubmit" type="submit" class="createAccount button" value="vidSubmit">
                    Update Player
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    ';


    echo "<br>";
    
           
        }
            
    }
    else{
        echo "Player ID could not be found";
        header("Location: Admin_profile.php");
        exit();
    }
    ?>
    
    </body>

</html>