<?php

    require_once("connect.php");

?>

<?php 
    $query ="SELECT * FROM season";
    $result = $conn->query($query);
?>

<?php 
    $teamquery ="SELECT * FROM team WHERE teamId != 1";
    $teamresult = $conn->query($teamquery);
?>

<?php 
    $fixturequery ="SELECT * FROM fixture";
    $fixtureresult = $conn->query($fixturequery);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="addUser.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="trial/main.css">
        <link rel="stylesheet" href="./css/PlayerStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/styles.css" /> -->
        <title>Fixtures</title>
    </head> 

        
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
              <!-- <small>*Only club representatives.</small> -->
        </div>
        <div class="navBarBtn">
            <i class="uil uil-bars icon"></i>
        </div>
    </div>

    </div>


    <body>
        <style>
            #form {
                position: relative;
                align-content: center;
                text-align: center;
            }

            #form {
                padding: 20px;
                margin-top: 30px;
            }

            .input-box {
                padding: 15px;
                width: 250px;
                border: none;
                font-size: medium;
                border-radius: 6px;
                transition: 1.2s;
                outline: 1.5px solid gray;
            }

            .input-box:hover {
                outline: 1.5px solid rgb(161, 6, 6);
            }

            .input-box:active {
                outline: 1.5px solid rgb(161, 6, 6);
            }

            #submit {
                padding: 15px;
                width: 200px;
                border: none;
                font-size: 17px;
                margin-top: 15px;
                letter-spacing: 1.5px;
                border-radius: 6px;
                color: rgb(252, 247, 247);
                background-color: rgb(161, 6, 6);
            }

            #submit:hover {
                outline: none;
                border: 1px solid gray;
                transition: 1.5s;
            }

            #standings {
                width: 100%;
                height: 90%;
                overflow-x: hidden;
            } 

            body{
                background-image: url("../images/bg.png");
                background-size: cover;
                font-family: 'Poppins';
                background-repeat: no-repeat;
            }
        </style>
        <button></button>
        <section>
            <div id="standings">
                <table>
                    <tr>
                        <th class="top-left">Team</th>
                        <th>Name</th>
                        <th>Team</th>
                        <th>Name</th>
                        <th>Fixture Date</th>
                        <th class="top-right">Time</th>
                        <!-- <th class="top-right">Edit</th> -->
                    </tr>

                            <!-- 
                                PHP CODE TO FETCH DATA FROM ROWS 
                            -->
                    <?php
                        while($tablerows=$fixtureresult->fetch_assoc())
                        {
                            // get first team's name using id
                            $team1Id = $tablerows['fTeamId'];
                            $t1query = "SELECT teamName FROM team WHERE teamId = $team1Id";
                            $t1result = mysqli_query($conn, $t1query);
                            $t1row = mysqli_fetch_assoc($t1result);
                            $t1name = $t1row['teamName'];

                            // get second team's name using id
                            $team2Id = $tablerows['sTeamId'];
                            $t2query = "SELECT teamName FROM team WHERE teamId = $team2Id";
                            $t2result = mysqli_query($conn, $t2query);
                            $t2row = mysqli_fetch_assoc($t2result);
                            $t2name = $t2row['teamName'];

                            $fixtureId = $tablerows['fixtureId'];
                        }
                    ?>
                    <tr>
                        <td class="bottom-left"><?php echo "<img src='$tablerows[fTeamImg]' alt=''>";?></td>
                        <td><?php echo $t1name;?></td>
                        <td><?php echo "<img src='$tablerows[sTeamImg]' alt=''>";?></td>
                        <td><?php echo $t2name;?></td>
                        <td><?php echo $tablerows['fixtureDate'];?></td>
                        <td><?php echo $tablerows['fixtureTime'];?></td>
                        <!-- <td class="bottom-right">
                            <a href="updatefixture.php?editid='.$fixtureId.'&t1Img='.$tablerows[fTeamImg].'&t1name='.$t1name.'&t2Img='.
                                $tablerows[sTeamImg].'&t2name='.$t2name.'&date='.$tablerows['fixtureDate'].'&time='.$tablerows['fixtureTime'].'" 
                                class="removeuser button">Edit</a>
                        </td> -->
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </section>


        <form
            name="form"
            id="form"
            method="POST"
            action="fixture_proc.php"
            class="userFormDiv"
        >
            <!-- Form input boxes -->
            <label class="formLabel"><b> Season </b></label>
            <br />
            <select name="season" id="season" class="input-box">
            <?php 
                while ($row = $result->fetch_assoc()) {
                    $value = $row['seasonId'];
                    echo "<option value=\"$value\">" . $row['seasonName'] . "</option>";
                }
            ?>
            </select>
            <br /><br />

            <label class="formLabel"><b> Team 1 </b></label>
            <br />
            <select name="team1" id="team1" class="input-box">
            <?php 
                while ($teamrow = $teamresult->fetch_assoc()) {
                    $value = $teamrow['teamId'];
                    echo "<option value=\"$value\">" . $teamrow['teamName'] . "</option>";
                }
            ?>
            </select>
            <br /><br />

            <label class="formLabel"><b> Team 2 </b></label>
            <br />
            <select name="team2" id="team2" class="input-box">
            <?php 
                mysqli_data_seek($teamresult, 0);
                while ($teamrow = $teamresult->fetch_assoc()) {
                    $value = $teamrow['teamId'];
                    echo "<option value=\"$value\">" . $teamrow['teamName'] . "</option>";
                }
            ?>
            </select>
            <br /><br />

            <label class="formLabel"><b> Date </b></label> <br />
            <input type="date" name="date" id="date" class="input-box">
            <br /><br />

            <label class="formLabel"><b> Time </b></label> <br />
            <input type="time" id="time" name="time" class="input-box">
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
