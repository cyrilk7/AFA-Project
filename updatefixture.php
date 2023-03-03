<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Page</title>
</head>

<body>

	<?php 
		//show me the data that was passed to this page
		$fixtureId = $_GET['editid'];
        $team1Img = $_GET['t1Img'];
		$team1Name = $_GET['t1name'];
        $team2Img = $_GET['t2Img'];
        $team2Name = $_GET['t2name'];
		$date = $_GET['date'];
        $time = $_GET['time'];

	?>

	<?php 
	    require_once("connect.php");

		//write the query
		$sql = "SELECT * FROM fixture WHERE fixtureId=$fixtureId";

		//echo "<h1>$sql</h1>";

		//execute the query (SELECT)
		$result = $conn->query($sql);

		//verify if query worked
		if ($result) 
		{
			//check if there is data in query
			if ($result->num_rows > 0) 
			{
				$row = $result->fetch_assoc();

				$dbid = $row['fixtureId'];
                $t1img = $row['fTeamImg'];
				$t1name = $row['fTeamName'];
                $t2img = $row['sTeamImg'];
				$t2name = $row['sTeamName'];
                $fixdate = $row['fixtureDate'];
                $fixtime = $row['fixtureTime'];
			}
		}		
	?>
	
	

	<h2>Update Here</h2>
	<form
            name="form"
            id="form"
            method="GET"
            action="updatefixture_proc.php"
            class="userFormDiv"
        >
            <!-- Form input boxes -->
            <input type="text" name="updateuid" hidden id="updateuid" value="<?php echo $dbid ?>">
            <br /><br />

            <label class="formLabel"><b> Team 1 Image </b></label><br />
            <input type="image" name="team1img" id="team1img" value="<?php echo $t1img ?>">
            <br /><br />

            <label class="formLabel"><b> Team 1 Name </b></label><br />
            <input type="text" name="team1" id="team1" value="<?php echo $t1name ?>">
            <br /><br />

            <label class="formLabel"><b> Team 2 Image </b></label><br />
            <input type="image" name="team2img" id="team2img" value="<?php echo $t2img ?>">
            <br /><br />

            <label class="formLabel"><b> Team 2 Name </b></label><br />
            <input type="text" name="team2" id="team2" value="<?php echo $t2name ?>">
            <br /><br />

            <label class="formLabel"><b> Date </b></label> <br />
            <input type="date" name="date" id="date" value="<?php echo $fixdate ?>">
            <br /><br />

            <label class="formLabel"><b> Time </b></label> <br />
            <input type="time" id="time" name="time" value="<?php echo $fixtime ?>">
            <br /><br />
            
            <div class="center">
            <input 
                id="submit"
                name="submit"  
                type="submit" 
                class="button" 
                value="Submit" 
                />
            </div>
        </form>
	
</body>
</html>