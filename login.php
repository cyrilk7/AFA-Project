<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashesi Sports+</title>
    <!-- Link css -->
    <link rel="stylesheet" href="trial/main.css">
    <!-- link icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- link swiper.min.css -->
    <link rel="stylesheet" href="trial/swiper-bundle.min.css">

</head>
</head>
<body style="background: white;">
    <style>
        .submitBtn {
            padding: 10px;
            border-radius: var(--borderRadius);
            outline: 1px solid gray;
            border: 2px solid transparent;
            background: var(--white);
            width: 100%;
            font-size: 13px;
            color: gray;
            font-weight: 500;
        }

        .submitBtn:hover {
            background: var(--primaryColor);
            color: white;
            outline: none;
            cursor: pointer;
        }

    </style>
        <div class="header">

            <div class="lowerSection">
                
                <div class="logoDiv" style="color: white; font-size: 25px">
                    <i class="uil uil-football icon" style="font-size: 25px"></i>
                    SPORTS+
                </div>
                
                <div class="navBar">
                    <ul class="navList">
                        <li class="navItem"><a href="index.php" class="navLink">Home</a></li>
                        <li class="navItem"><a href="standings.php" class="navLink">LeagueTable</a></li>
                        <li class="navItem"><a href="statistics.html" class="navLink">Statistics</a></li>
                        <li class="navItem"><a href="profiles.html" class="navLink">Profiles</a></li> 
                        <li class="navItem"><a href="" class="navLink">Fixtures</a></li>
                        <li class="navItem"><a href="" class="navLink">Results</a></li>
                        <li class="navItem"><a href="" class="navLink">Users</a></li>
                      </ul>
                      <div class="button">
                          <a href="login.html">LOG IN</a>
                      </div>
                      <small>*Only AFA representatives.</small>
                </div>
                <div class="navBarBtn">
                    <i class="uil uil-bars icon"></i>
                </div>
            </div>
        </div>
        
         <div class="aboutBanner" style="padding: 90px 0 10px;">
            <span class="bannerText">
                <i class="uil uil-constructor icon"></i>
                <p>Coach/Admin Login</p>
            </span>
         </div>

             <!-- Login Section ======================== -->
    <section class=" loginSection section">
        <div class="sectionIntro">
                <!-- <h2 class="title">
                    Coach/Admin Login
                </h2> <br> -->
            <span class="subTitle">
                Be authentic, only admins.
            </span>
        </div>
        <div class="formContainer">
            <div class="overlay"></div>
            <form action="login_proc.php" method="POST" onsubmit="return ValidateEmail()">
                <div class="rows grid">
                    <div class="row">
                      <label for="username">Username</label>
                      <input type="text" name="username" id="username" placeholder="Enter your User Name" required>
                    </div>
        
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    </div>
        
                    <!-- <input type="button" name="submit" id="submit" class="submitBtn" value="Login"> -->
                    <button name="submit" id="submit" class="submitBtn"> Login </button>         
                    <span class="registerLink"> <a href="#">*Forgot password?</a></span>
                </div>
            </form>
        </div>
    </section>
    
    
         
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
    <script>
        var username = document.getElementById('username');
        var password = document.getElementById('password');
        var btn = document.getElementById('submit');

        btn.addEventListener('click', ValidateEmail);

        // Function to validate email input
        function ValidateEmail() {
            // email regular expression
            var nameformat = /^[A-Za-z]\w{3,14}$/;
            
            // test against email input field 
            if (nameformat.test(username.value)) {
                alert("Valid username input");
                return true;
            } else {
                alert("Invalid username");
                return false;
            }
        }
    </script>
    <!-- swiper.js link -->
    <script src="trial/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="trial/main.js"></script>
</body>
</html>