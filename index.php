<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./font-awesome/font-awesome/css/font-awesome.min.css"> -->
    <title> Ashesi Sports+ </title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <style>
      *, html {

      scroll-behavior: smooth !important;
      }

      /* #bar{
        display:none;
      } */
    </style>
</head>
<body>


    
    <div class="navbar-local">
            <div class="container-local">
            <!-- <i class="fa-solid fa-camera fa-10x"></i> -->
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
                    <i class="fas fa-bars fa-2x" id="bar"></i>
                    

                    <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                    
                               
                </ul>

                <!-- <img src="images/bars-solid.svg" alt=""> -->
                
                


            </div>
    </div>
    <div class="content-box-local">
        <p> Sports Management Web Application </p>
        <h1> The New Era of the AFA </h1>
        <p class="p-white"> We bring you everything you need, all in one place. </p>
        <button id="question-button"> Questions? </button>
        <a href="#fixtures-box"><button class="long-button"> Let's begin </button></a>
        
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



    <!-- <div class="modal" tabindex="-1" id="loginModal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
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

    <script src="./bootstrap/js/bootstrap.js"></script> -->
    
</body>
</html>