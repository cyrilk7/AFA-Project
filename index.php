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
<body>
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
                    <li class="navItem"><a href="" class="navLink">Statistics</a></li>
                    <li class="navItem"><a href="profiles.html" class="navLink">Profiles</a></li> <!-- add charts so they see team performance -->
                    <!-- <li class="navItem"><a href="" class="navLink">Results</a></li> -->
                    <li class="navItem"><a href="media.php" class="navLink">MediaCenter</a></li>
                  </ul>
                  <div class="button">
                      <a href="login.php">LOG IN</a>
                  </div>
                  <small>*Only club representatives.</small>
            </div>
            <div class="navBarBtn">
                <i class="uil uil-bars icon"></i>
            </div>
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
    <div class="modal" tabindex="-1" id="loginModal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <!-- form content goes here -->
             <form action="">
                <input type="text"><input type="text"><input type="text"><input type="text"><input type="text">
             </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.js"></script>
    
</body>
</html>