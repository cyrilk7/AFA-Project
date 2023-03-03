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
                    <li><a href="login.php"><button id="login"> Log In </button>   </a></li>
                    <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                    
                               
                </ul>


            </div>
    </div>



    <div class="profile-top">
        <div class="profile-left">
            <img src="images/highlanders.png" alt="" id="profile-img" style="padding-right:60px; width: 50%; heiht:50%">

        </div>

        <div class="profile-right">
            <h1> Highlanders FC </h1>
            <hr id="hr">
        </div>
        
    </div>
    <div style="display:flex">
        <div class="profile-bottom">
            <p> Founded: <span> 2015 </span> </p>
            <p> Head Coach:  <span>Kofi Osei Owusi </span> </p>
            <p> Assistant Coach: <span> John Brends </span> </p>
            <p> Captain: <span> Jordan Boye</span>  </p>
            <p> Number Of Trophies: <span> 3 </span> </p>
            <button data-toggle="modal" data-target="#playerModal" class="players"> Players </button>

        </div>
        <div>
            <img src="images/team.png" alt="" style="margin-left: 100px; height: 90%;">
        </div>
</div>
<div class="modal fade bd-example-modal-sm" tabindex="-1" id="playerModal" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="modal-title" style="font-size: 40px;"> Players </h1>

                </div>
                <div class="modal-body">
                    <p> John Brends - CF </p>
                    <p> John Brends - CF </p>
                    <p> John Brends - CF </p>
                    <p> John Brends - CF </p>



                    <!-- form content goes here -->

                </div>
            </div>
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.js"></script>
</body>
</html>