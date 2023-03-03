<?php

    require_once("connect.php");

?>

<?php 
    $query ="SELECT teamName FROM team";
    $result = $conn->query($query);

    $userquery ="SELECT * FROM user";
    $userresult = $conn->query($userquery);

    $userxteam = "SELECT teamId from coach INNER JOIN user ON coach.userId = user.userId";
    $userxteamresult = $conn->query($userxteam);

?>

<?php 
    $gamequery = "SELECT * FROM game";
    $gameresult = $conn->query($gamequery);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Sports+</title>
    <!-- Link css -->
    <link rel="stylesheet" href="trial/main.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- link icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- link swiper.min.css -->
    <link rel="stylesheet" href="trial/swiper-bundle.min.css">

</head>
<body style="background: white">
    <div class="header">
        <div class="lowerSection">
                <div class="logoDiv" style="color: white; font-size: 25px">
                    <i class="uil uil-football icon" style="font-size: 25px"></i>
                    SPORTS+
                </div>
            
            <div class="navBar">
                <ul class="navList">
                    <li class="navItem"><a href="index.php" class="navLink">Home</a></li>
                    <li class="navItem"><a href="standings.html" class="navLink">LeagueTable</a></li>
                    <li class="navItem"><a href="" class="navLink">Statistics</a></li>
                    <li class="navItem"><a href="profiles.html" class="navLink">Profiles</a></li> <!-- add charts so they see team performance -->
                    <li class="navItem"><a href="" class="navLink">Results</a></li>
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

        <!-- Results Section ================================ -->
    <div class="section container resultsSection" id="results">
        <div class="sectionContainer">
            <div class="sectionIntro">
            <h2></h2>
            <span class="sectionSubTitle"></span>
            </div>
            <div class="sectionIntro">
            <h2></h2>
            <span class="sectionSubTitle"></span>
            </div>
            <div class="sectionIntro">
            <h2></h2>
            <span class="sectionSubTitle"></span>
            </div>

            <div class="sectionContent grid">


            <!-- Table and team of the week ==================== -->
            <div class="table__WeekPlayers grid">
                <div class="tableDiv">
                <div class="tableLogoDiv">
                    <h3>Current League Standings</h3>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <th>RANK</th>
                            <th>TEAM</th>
                            <th>MP</th>
                            <th>W</th>
                            <th>D</th>
                            <th>L</th>
                            <th>GF</th>
                            <th>GA</th>
                            <th>GD</th>
                            <th>PTS</th>
                        </tr>
                        <?php
                            //  while($gamerows=$gameresult->fetch_assoc())
                            //  {
                            //     // get fixture details using id
                            //     $fixtureId = $gamerows['fixtureId'];
                            //     $fquery = "SELECT * FROM fixture WHERE fixtureId = $fixtureId";
                            //     $fresult = mysqli_query($conn, $fquery);
                            //     $frow = mysqli_fetch_assoc($fresult);
                                

                            //     $tquery = "SELECT * FROM team";
                            //     $tresult = mysqli_query($conn, $tquery);
                            //     $trow = mysqli_fetch_assoc($tresult);
                            //     $tid = $trow['teamId'];
                            //     $tName = $trow['teamName'];
                            //     $tImg = $trow['teamImg'];

                                // $cquery = "SELECT team.teamId, COUNT(game.fixtureId) AS gamesPlayed
                                //         FROM (
                                //             SELECT fTeamId AS teamId FROM fixture
                                //             UNION
                                //             SELECT sTeamId AS teamId FROM fixture
                                //         ) AS team
                                //         LEFT JOIN fixture ON team.teamId IN (fixture.fTeamId, fixture.sTeamId)
                                //         LEFT JOIN game ON game.fixtureId = fixture.fixtureId
                                //         GROUP BY team.teamId";
                                // $cresult = mysqli_query($conn, $cquery);
                                // if ($crow = mysqli_fetch_assoc($cresult)) {
                        ?>
                            <tr class="tr" style="padding: 1rem 0">
                                <td class="pos green leader">1</td>
                                <td class="flex">
                                    <div class="name">Elite FC</div>  
                                    <div class="teamLogoDiv">      
                                        <?php echo "well";?></td>
                                    </div>
                                </td>
                                <td>2</td>                      
                                <td>2</td>               
                                <td>0</td>           
                                <td>0</td>              
                                <td>4</td>          
                                <td>1</td>              
                                <td>3</td>                  
                                <td class="points">2</td>       
                            </tr> 
                            <tr class="tr" style="padding: 1rem 0">
                                <td class="pos green">2</td>
                                <td class="flex">
                                    <div class="name">Red Army</div>  
                                    <div class="teamLogoDiv">      
                                        <?php echo "well";?></td>
                                    </div>
                                </td>
                                <td>2</td>                      
                                <td>1</td>               
                                <td>0</td>           
                                <td>1</td>              
                                <td>6</td>          
                                <td>1</td>              
                                <td>5</td>                  
                                <td class="points">1</td>       
                            </tr> 
                            <tr class="tr" style="padding: 1rem 0">
                                <td class="pos">3</td>
                                <td class="flex">
                                    <div class="name">Northside FC</div>  
                                    <div class="teamLogoDiv">      
                                        <?php echo "well";?></td>
                                    </div>
                                </td>
                                <td>2</td>                      
                                <td>1</td>               
                                <td>0</td>           
                                <td>1</td>              
                                <td>6</td>          
                                <td>1</td>              
                                <td>5</td>                  
                                <td class="points">1</td>       
                            </tr> 
                            <tr class="tr" style="padding: 1rem 0">
                                <td class="pos">4</td>
                                <td class="flex">
                                    <div class="name">Highlanders FC</div>  
                                    <div class="teamLogoDiv">      
                                        <?php echo "well";?></td>
                                    </div>
                                </td>
                                <td>2</td>                      
                                <td>1</td>               
                                <td>0</td>           
                                <td>1</td>              
                                <td>1</td>          
                                <td>3</td>              
                                <td>-2</td>                  
                                <td class="points">1</td>       
                            </tr> 
                            <tr class="tr" style="padding: 1rem 0">
                                <td class="pos red">5</td>
                                <td class="flex">
                                    <div class="name">Lengends FC</div>  
                                    <div class="teamLogoDiv">      
                                        <?php echo "well";?></td>
                                    </div>
                                </td>
                                <td>1</td>                      
                                <td>0</td>               
                                <td>0</td>           
                                <td>1</td>              
                                <td>0</td>          
                                <td>2</td>              
                                <td>-2</td>                  
                                <td class="points">0</td>       
                            </tr> 
                            <tr class="tr" style="padding: 1rem 0">
                                <td class="pos red">6</td>
                                <td class="flex">
                                    <div class="name">Kasanoma</div>  
                                    <div class="teamLogoDiv">      
                                        <?php echo "well";?></td>
                                    </div>
                                </td>
                                <td>1</td>                      
                                <td>0</td>               
                                <td>0</td>           
                                <td>1</td>              
                                <td>1</td>          
                                <td>4</td>              
                                <td>-3</td>                  
                                <td class="points">0</td>       
                            </tr> 
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Results Section ends================================ -->

    
</body>
</html>

