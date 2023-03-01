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
    <h2>Welcome to the delete page</h2>
    <?php
    $playerID =  $_GET['playerID'];

    if (isset($_GET['delete'])){
        // echo "<h2> Source page is valid </h2>";
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "afa_db";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if($conn -> connect_error){
            //kill the connection if an error is encountered
            die("Connection failed: ". $conn->connect_error);
    
            //end insert process and redirect to admin page
            // echo "<script type = text/javascript>
            // alert('There was an error');
            // </script>"
            header("Location " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    
        else{
            echo "<br>";
            echo "Connection successful";
            echo "<br>";
    
    
            
    
    
            $sql = "DELETE FROM teammember WHERE playerID = $playerID";
    
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
        // header("Location: login.php");
        // exit();
     }

    // header("Location:legends.php");
    // header("Location:kasanoma.php");

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
    ?>
    </body>
</html>