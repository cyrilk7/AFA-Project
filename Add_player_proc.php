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
    <h2>Welcome to the Add player page</h2>
    <!-- Check that request is from admin page
        Access variables
        Create db connection
        Write add query
        Confirm execution 
        Add buffering*
        Show success message (+ GIF)
        Add button to go back to player page
     -->
     <?php
     if (isset($_POST['vidSubmit'])){
        echo "Page source verified";
        echo "<br>";

        $playerFirstName = $_POST['fname'];
        $playerLastName = $_POST['lname'];
        $playerPosition = $_POST['position'];
        $playerTeamID = $_POST['teamID'];

        echo "Player team: ".$playerTeamID;
        echo "<br>";

        echo "First Name: ".$playerFirstName;
        echo "<br>";

        echo "Last Name: ".$playerLastName;
        echo "<br>";

        echo "Position: ".$playerPosition;

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
                    $sql = "INSERT INTO teammember(teamID, fname, lname, position)
                    VALUES('$playerTeamID', '$playerFirstName', '$playerLastName', '$playerPosition')";
        
                    $result = mysqli_query($conn, $sql);
        
                    if($result){
                        // echo "<h3> Result returned valid values</h3>";
                        // echo "<br>";
                        
                        echo "<br>";
                        echo $playerFirstName." successfully added to db";

                        header("Location: Admin_Kasanoma.php?teamid=1");
                        exit();
        
                    //    echo" <script type = "text/javascript">
                    //     </script>
                    //     "
                    }
                }
            


     }
    //  Write db query to return name of team in order to create correct redirect
     echo "<a href = 'Admin_Kasanoma.php?teamid=1'><button> Click to return to profile page</button></a>";
    

     ?>
    </body>

</html>