<?php

if (isset($_POST['username']) && isset($_POST['pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
}

//Make username field unique in database
$uname = validate($_POST['username']);
$pass = validate($_POST['pass']);


if (empty($uname)){
    //Header not showing
    header("Location: login.php?error=User Name is required");
    exit();
}

else if(empty($pass)){
    //Header not showing
    header("Location: login.php?error=Password is required");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afa_app_2023";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	//stop executing the code and echo error
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users WHERE user_name='$uname'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);

	$user_id = $row['user_id'];
	$name = $row['user_name'];
	$email = $row['user_email'];
	$userpass = $row['user_pass'];
	$userrole = $row['user_role'];

    //Change to password hash
	if ($pass === $userpass){

        session_start();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_role'] = $userrole;

        if ($userrole === '1'){
            header("Location: adminindex.php");
        }
        else if($userrole === '2'){
            header("Location: index.php");
        }


		

	}
	else{
		header("Location: login.php");
	}



}

else{
    header("Location: login.php");
    exit();
}

?>