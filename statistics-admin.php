<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/stats.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title> Ashesi Sports+ </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li><a href="standings-admin.php">League Tables</a></li>
                    <li><a href="statistics-admin.php">Statistics</a></li>
                    <li><a href="profile-admin.php">Profile</a></li>  
                    <li><a href="media-admin.php">Media Center</a></li>  
                    <li><button id="login"> Logout </button> </li>
                    <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                    
                               
                </ul>


            </div>
    </div>

    <div class="stat-container">
        <h1> Statistics </h1>
        <div class="stat-row" style="display:flex;">
            <div class="stat-box">
                <img src="images/StatsPic2.png" alt="" class="stats-img">
                <div class = "text-box">
                    <h1 style="margin:0px"> 20 </h1>
                    <h2 style="color:white; margin:0px;"> Goals </h2>
                    <h3 style="font-weight:200"> Jordan Boye </h3>
                </div>
                <div class = "crest-box">
                    <img src="images/kasanoma.png" alt="" style="width:50%; height:50%;">

                </div>



            </div>


            <div class="stat-box">
                <img src="images/StatsPic2.png" alt="" class="stats-img">
                <div class = "text-box">
                    <h1 style="margin:0px"> 20 </h1>
                    <h2 style="color:white; margin:0px;"> Goals </h2>
                    <h3 style="font-weight:200"> Jordan Boye </h3>
                </div>
                <div class = "crest-box">
                    <img src="images/kasanoma.png" alt="" style="width:50%; height:50%;">

                </div>



            </div>

            <div class="stat-box">
                <img src="images/StatsPic2.png" alt="" class="stats-img">
                <div class = "text-box">
                    <h1 style="margin:0px"> 20 </h1>
                    <h2 style="color:white; margin:0px;"> Goals </h2>
                    <h3 style="font-weight:200"> Daniel Nkansah Jnr </h3>
                </div>
                <div class = "crest-box">
                    <img src="images/kasanoma.png" alt="" style="width:50%; height:50%;">

                </div>



            </div>

        </div>


        <div class="stat-row" style="display:flex;">
            <div class="stat-box">
                <img src="images/StatsPic2.png" alt="" class="stats-img">
                <div class = "text-box">
                    <h1 style="margin:0px"> 20 </h1>
                    <h2 style="color:white; margin:0px;"> Goals </h2>
                    <h3 style="font-weight:200"> Jordan Boye </h3>
                </div>
                <div class = "crest-box">
                    <img src="images/kasanoma.png" alt="" style="width:50%; height:50%;">

                </div>



            </div>


            <div class="stat-box">
                <img src="images/StatsPic2.png" alt="" class="stats-img">
                <div class = "text-box">
                    <h1 style="margin:0px"> 20 </h1>
                    <h2 style="color:white; margin:0px;"> Goals </h2>
                    <h3 style="font-weight:200"> Jordan Boye </h3>
                </div>
                <div class = "crest-box">
                    <img src="images/kasanoma.png" alt="" style="width:50%; height:50%;">

                </div>



            </div>

            <div class="stat-box">
                <img src="images/StatsPic2.png" alt="" class="stats-img">
                <div class = "text-box">
                    <h1 style="margin:0px"> 20 </h1>
                    <h2 style="color:white; margin:0px;"> Goals </h2>
                    <h3 style="font-weight:200"> Jordan Boye </h3>
                </div>
                <div class = "crest-box">
                    <img src="images/kasanoma.png" alt="" style="width:50%; height:50%;">

                </div>



            </div>

        </div>

    </div>

    <div class="modal fade" tabindex="-1" id="statModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" style="font-size: 40px;"> Statistics </h1>

                </div>
                <div class="modal-body">
                    <p> Most Goals </p>
                    <input type="text" placeholder="Number of Goals">
                    <input type="text" placeholder="Name">

                    <select name="team1" id="team1">
                        <option value="0"> Team 1 </option>
                        <option value="volvo">Elite</option>
                        <option value="saab">Kasanoma</option>
                        <option value="mercedes">Northside</option>
                        <option value="audi">Red Army</option>
                        <option value="audi">Legends United</option>
                        <option value="audi">Highlanders</option>
                    </select>

                    <p> Most Assists</p>
                    <input type="text" placeholder="Number of Goals">
                    <input type="text" placeholder="Name">

                    <select name="team1" id="team1">
                        <option value="0"> Team 1 </option>
                        <option value="volvo">Elite</option>
                        <option value="saab">Kasanoma</option>
                        <option value="mercedes">Northside</option>
                        <option value="audi">Red Army</option>
                        <option value="audi">Legends United</option>
                        <option value="audi">Highlanders</option>
                    </select>

                    <p> Most Clean Sheets</p>
                    <input type="text" placeholder="Number of Clean Sheets">
                    <input type="text" placeholder="Name">

                    <select name="team1" id="team1">
                        <option value="0"> Team 1 </option>
                        <option value="volvo">Elite</option>
                        <option value="saab">Kasanoma</option>
                        <option value="mercedes">Northside</option>
                        <option value="audi">Red Army</option>
                        <option value="audi">Legends United</option>
                        <option value="audi">Highlanders</option>
                    </select>

                    <p> Most Successful Passes</p>
                    <input type="text" placeholder="Number of Successful Passes">
                    <input type="text" placeholder="Name">

                    <select name="team1" id="team1">
                        <option value="0"> Team 1 </option>
                        <option value="volvo">Elite</option>
                        <option value="saab">Kasanoma</option>
                        <option value="mercedes">Northside</option>
                        <option value="audi">Red Army</option>
                        <option value="audi">Legends United</option>
                        <option value="audi">Highlanders</option>
                    </select>

                    <p> Most Successful Tackles</p>
                    <input type="text" placeholder="Successful Tackles">
                    <input type="text" placeholder="Name">

                    <select name="team1" id="team1">
                        <option value="0"> Team 1 </option>
                        <option value="volvo">Elite</option>
                        <option value="saab">Kasanoma</option>
                        <option value="mercedes">Northside</option>
                        <option value="audi">Red Army</option>
                        <option value="audi">Legends United</option>
                        <option value="audi">Highlanders</option>
                    </select>

                    <p> Most Saves</p>
                    <input type="text" placeholder="Number of Saves">
                    <input type="text" placeholder="Name">

                    <select name="team1" id="team1">
                        <option value="0"> Team 1 </option>
                        <option value="volvo">Elite</option>
                        <option value="saab">Kasanoma</option>
                        <option value="mercedes">Northside</option>
                        <option value="audi">Red Army</option>
                        <option value="audi">Legends United</option>
                        <option value="audi">Highlanders</option>
                    </select>





                    <!-- form content goes here -->

                </div>
            </div>
        </div>
    </div>




    <script src="./bootstrap/js/bootstrap.js"></script>



</body>
</html>