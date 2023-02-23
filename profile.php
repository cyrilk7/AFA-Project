<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/prof.css">
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

    <div class="profile-container">
        <h1> Team Profiles </h1>
        <div class="profile-row" style = "display:flex;">
            <div class="profile-box" >
            <a href="kasanoma.php">
                <div class="profile-img">
                    <img src="images/kasanoma.png" alt="" >
                </div>
                <h2 style = "color:white;"> Kasanoma FC</h2>
                </a>
            </div> 

            <div class="profile-box" >
            <a href="elite.php">
                <div class="profile-img">
                    <img src="images/Elite.png" alt="" >
                </div>
                <h2 style = "color:white;"> Elite FC</h2>
            </a>
            </div>

            <div class="profile-box" >
            <a href="northside.php">
                <div class="profile-img">
                    <img src="images/northside.png" alt="" >
                </div>
                <h2 style = "color:white;"> Northside FC</h2>
            </a>
            </div>
        </div>

        <div class="profile-row" style = "display:flex;">
            <div class="profile-box">
            <a href="legends.php">
                <div class="profile-img">
                    <img src="images/kasanoma.png" alt="">
                </div>
                <h2 style = "color:white;"> Legends United FC</h2>
            </a>
            </div>

            <div class="profile-box" >
            <a href="highlanders.php">
                <div class="profile-img">
                    <img src="images/kasanoma.png" alt="" >
                </div>
                <h2 style = "color:white;"> Highlanders FC</h2>
            </a>
            </div>

            <div class="profile-box" >
            <a href="redArmy.php">
                <div class="profile-img">
                    <img src="images/kasanoma.png" alt="" >
                </div>
                <h2 style = "color:white;"> Red Army FC</h2>
            </a>
            </div>
        </div>

    </div>

</body>
</html>