<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/prof.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css\AddVideoStyle.css"/>

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
                    
                    
                    <li><a href="Logout.php"><button id="login" data-toggle="modal" data-target="#loginModal"> Logout </button></a> </li>
                    
                               
                </ul>


            </div>
    </div>

    <!-- <div id="addUserModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span class="close">&times;</span>
              <h2>Add New Video</h2>
            </div>
    
            <div class="modal-body">
              <form
                name="modalForm"
                method="POST"
                action="addVideo_proc.php"
                class="userFormDiv"
              > -->
                <!-- Form input boxes -->
                <!-- <label class="formLabel"><b> Video Title </b></label>
                <br />
                <input
                  class="userForm box"
                  type="text"
                  placeholder="Match title"
                  name="vidTitle"
                  id = "vidTitle"
                  required
                />
                <br /><br />
    
                <label class="formLabel"><b> Video Link </b></label>
                <br />
                <input
                  class="userForm box"
                  type="text"
                  placeholder="Enter the video link"
                  name="vidLink"
                  id = "vidLink"
                  required
                />
                <br /><br />
    
                <label class="formLabel"><b> Video thumbnail </b></label> <br />
                <input
                  class="userForm box"
                  type="file"
                  name="vidThumbnail"
                  id = "vidThumbnail"
                />
                <br/><br/>
     
               
    
                <div class="center">
                  <button name="vidSubmit" type="submit" class="createAccount button" value="vidSubmit">
                    Enter new video
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    
       -->
    
      

    <main>
    <div class="profile-container">
        <h1> Team Profiles </h1>
        <div class="profile-row" style = "display:flex;">
            <div class="profile-box" >
            <a href="Admin_Kasanoma.php?teamid=3">
                <div class="profile-img">
                    <img src="images/kasanoma.png" alt="" >
                </div>
                <h2 style = "color:white;"> Kasanoma FC</h2>
                </a>
            </div> 

            <div class="profile-box" >
            <a href="Admin_Elite.php?teamid=2">
                <div class="profile-img">
                    <img src="images/Elite.png" alt="" >
                </div>
                <h2 style = "color:white;"> Elite FC</h2>
            </a>
            </div>

            <div class="profile-box" >
            <a href="Admin_Northside.php?teamid=6">
                <div class="profile-img">
                    <img src="images/northside.png" alt="" >
                </div>
                <h2 style = "color:white;"> Northside FC</h2>
            </a>
            </div>
        </div>

        <div class="profile-row" style = "display:flex;">
            <div class="profile-box">
            <a href="Admin_Legends.php?teamid=5">
                <div class="profile-img">
                    <img src="images/kasanoma.png" alt="">
                </div>
                <h2 style = "color:white;"> Legends United FC</h2>
            </a>
            </div>

            <div class="profile-box" >
            <a href="Admin_RedArmy.php?teamid=4">
                <div class="profile-img">
                    <img src="images\high.jpg" alt="" >
                </div>
                <h2 style = "color:white;"> Highlanders FC</h2>
            </a>
            </div>

            <div class="profile-box" >
            <a href="Admin_RedArmy.php?teamid=7">
                <div class="profile-img">
                    <img src="images\red.jpg" alt="" >
                </div>
                <h2 style = "color:white;"> Red Army FC</h2>
            </a>
            </div>
        </div>

    </div>
</main>
    <script src="addVideos.js"></script>

</body>
</html>