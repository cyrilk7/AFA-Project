<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title> Ashesi Sports+ </title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
    <script src="./bootstrap/js/bootstrap.js"></script>
    
    <div class="navbar-local">
            <div class="container-local">
                <div class= logobox-local>
                    <img class="logo-local" src="images/Group 1.svg" alt="logo">
                </div>
                <ul class="links-local">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="standings.php">League Tables</a></li>
                    <li><a href="statistics.php">Statistics</a></li>
                    <li><a href="profile.php">Profile</a></li>  
                    <li><a href="media.php">Media Center</a></li>  
                    <!-- <li><a href="login.html"><button id="login"> Edit </button>   </a></li> -->
                    <li><button id="login" data-toggle="modal" data-target="#loginModal"> Edit </button> </li>
                    
                               
                </ul>


            </div>
    </div>
    <div class="content-box-local">
        <p> Sports Management Web Application </p>
        <h1> The New Era of the AFA </h1>
        <p class="p-white"> We bring you everything you need, all in one place. </p>
        <button id="question-button"> Questions? </button>
        <a href="#"><button class="long-button"> Let's begin </button></a>
        
    </div>

    <div id="fixtures-box">
        <h1> Upcoming fixtures </h1>
        <div class="box-1">
            <!-- <div id="kasanoma-img">
                <img src="images/kasanoma.svg" alt="" style="width: 100%; height:100%;">
            </div> -->
            

        </div>

        <div class="box-1">

        </div>
        
    </div>



    <!-- modal goes here -->
    <div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              <h1 class="modal-title" style="font-size: 40px;"> Add New Fixture </h1>

            </div>
            <div class="modal-body">

                <select name="team1" id="team1">
                <option value="0"> Team 1 </option>
                <option value="volvo">Elite</option>
                <option value="saab">Kasanoma</option>
                <option value="mercedes">Northside</option>
                <option value="audi">Red Army</option>
                <option value="audi">Legends United</option>
                <option value="audi">Highlanders</option>
                </select>

                <select name="team2" id="team2">
                    <option value="0"> Team 2 </option>
                    <option value="volvo">Elite</option>
                    <option value="saab">Kasanoma</option>
                    <option value="mercedes">Northside</option>
                    <option value="audi">Red Army</option>
                    <option value="audi">Legends United</option>
                    <option value="audi">Highlanders</option>
                    </select>

                
                
                <input type="date" placeholder="Date" class="fixture-date">
                <input type="time" placeholder="Time" class="fixture-input">
                <br>
                <a href="#"><button class="long-button"> Submit </button></a>
             <!-- form content goes here -->

            </div>
          </div>
        </div>
    </div>



    <!-- <div class="modal" tabindex="-1" id="loginModal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title"> Add New Fixture </h1>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
  

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.js"></script>
     -->
</body>
</html>