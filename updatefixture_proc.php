<?php 

//check if update form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_GET['edit'])) 
{

	//collection form data
    $fixtureId = $_GET['edit'];
    $team1Img = $_GET['t1Img'];
    $team1Name = $_GET['t1name'];
    $team2Img = $_GET['t2Img'];
    $team2Name = $_GET['t2name'];
    $date = $_GET['date'];
    $time = $_GET['time'];

    require_once("connect.php");

	$sql = "UPDATE fixture
			SET fixtureDate = $date
			WHERE fixtureTime = $time";

	// check if query worked
	if ($conn->query($sql) === TRUE) {

		//begin session
		//session_start();
	  
		//redirect to homepage
		header("Location: fixture.php");
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: adminindex.php");
	//echo "updated";
	exit();
}



?>