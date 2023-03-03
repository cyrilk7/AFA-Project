
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="trial/main.css">
    <!-- link icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- link swiper.min.css -->
    <link rel="stylesheet" href="trial/swiper-bundle.min.css">

</head>
<body>


        <div class="header">

            <div class="lowerSection">
                
                <div class="logoDiv" style="color: white; font-size: 25px">
                    <i class="uil uil-football icon" style="font-size: 25px"></i>
                    SPORTS+
                </div>
                
                <div class="navBar">
                    <ul class="navList">
                        <li class="navItem"><a href="coachindex.php" class="navLink">Home</a></li>
                        <li class="navItem"><a href="standings.php" class="navLink">LeagueTable</a></li>
                        <li class="navItem"><a href="statistics.php" class="navLink">Statistics</a></li>
                        <li class="navItem"><a href="profile-admin.php" class="navLink">Profiles</a></li> <!-- add charts so they see team performance -->
                        <li class="navItem"><a href="media.php" class="navLink">Media Center</a></li>
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
        
         <div class="aboutBanner" style="padding: 90px 0 10px;">
            <span class="bannerText">
                <i class="uil uil-constructor icon"></i>
                <p>Sports+</p>
            </span>
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
        <div class="box-1" style="display: flex; padding: 2%;">
          <img src="images/kasanoma.png" alt="" style="margin:auto">
          <div style="margin:auto">
            <h1 style="color:black; margin-bottom: 0px; margin-left:30%;"> VS </h1>
            <h2 style="margin-top:0px;"> Saturday 10:00 AM </h2>
          </div>
          <img src="images/northside.png" alt="" style="margin:auto">
        </div>


        <div class="box-1" style="display: flex; padding: 2%;">
          <img src="images/kasanoma.png" alt="" style="margin:auto">
          <div style="margin:auto">
            <h1 style="color:black; margin-bottom: 0px; margin-left:30%;"> VS </h1>
            <h2 style="margin-top:0px;"> Saturday 10:00 AM </h2>
          </div>
          <img src="images/northside.png" alt="" style="margin:auto">
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


       <!-- footer section starts here =============================================================-->
    <div class="footer">
        <div class="copyRight">
            <div class="copyRightDiv">
                <span class="middle"><a href="results.html" style="color: gray;">Table</a></span>
                <span class="middle"><a href="news.html" style="color: gray;">Transfers</a> </span>
                <span></span>
                <span class="middle" style="color: white;">Contact Us:
                    <a href="https://www.instagram.com/ashesi_football" target="_blank" style="color: white;"> <!-- Switch to instagram -->
                        <i class="uil uil-instagram icon"></i>
                    </a>
                    <a href="mailto:afa@ashesi.edu.gh" target="_blank" style="color: white;">
                        <i class="uil uil-envelope-heart icon"></i>
                    </a>
                    <a href="https://www.twitter.com/AshesiFootball" target="_blank" style="color: white;"> <!-- Switch to twitter -->
                        <i class="uil uil-twitter icon"></i>
                    </a>
                    <a href="https://www.youtube.com" target="_blank" style="color: white;">
                        <i class="uil uil-youtube icon"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>

    <!-- footer section ends here =============================================================-->

    <!-- swiper.js link -->
    <script src="trial/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="trial/main.js"></script>
     <script src="./bootstrap/js/bootstrap.js"></script>

    <!-- swiper.js link -->
    <script src="trial/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="trial/main.js"></script>
</body>
</html>