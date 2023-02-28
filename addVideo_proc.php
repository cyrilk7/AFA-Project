<!DOCTYPE html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <body>
        <h3> Welcome to the Add Video Processing Page </h3>
        <h1> Kindly wait as the server processes your request </h1>
    </body>

</html>

<?php
 //check this user came from admin page otherwise bounce back to login page
 //set up database connection
 //access posted data and echo
 //access picture

 if (isset($_POST['vidSubmit'])){
    echo "<h2> Source page is valid </h2>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "afa_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        //kill the connection if an error is encountered
        die("Connection failed: ". $conn->connect_error);

        //end insert process and redirect to admin page
        header("Location: AdminMediaCenter.php");
        exit();
    }

    else{
        echo "<br>";
        echo "Connection successful";
        echo "<br>";


        $videoTitle = $_POST['vidTitle'];
        $videoLink = $_POST['vidLink'];

        echo "Video Title = ". $videoTitle;
        echo "<br>";
        echo "Video Link = " . $videoLink;
        echo "<br>";


        $sql = "INSERT into mediacentre (matchName, thumbnail, videolink, gameId)
        Values ('$videoTitle', 'images\highlanders.png', '$videoLink', '1')";

        if($conn -> query($sql) === TRUE){

            echo "Haha successs";
        }
        else{
            echo "Error ". $conn->error . "<br> SQL = " . $sql; 
        }

    }



 }
 else{
    echo "Source page invalid";
    header("Location: login.php");
    exit();
 }
?>