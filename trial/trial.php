
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer League</title>
    <!-- Link css -->
    <link rel="stylesheet" href="main.css">
    <!-- link icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- link swiper.min.css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

</head>
<body>


        <div class="header">

            <div class="lowerSection">
                
                <div class="logoDiv">
                   <img src="./assets/logo-blue-dark.png" alt="Logo" class="logo">
                </div>
    
                <!-- <div class="logInBtn">
                    <a href="#">
                        Log In 
                    </a>
                </div> -->
                
                <div class="navBar">
                    <ul class="navList">
                        <li class="navItem"><a href="index.html" class="navLink">Home</a></li>
                        <li class="navItem"><a href="about.html" class="navLink">LeagueTable</a></li>
                        <li class="navItem"><a href="clubs.html" class="navLink">Statistics</a></li>
                        <li class="navItem"><a href="fixtures.html" class="navLink">Fixtures</a></li>
                        <li class="navItem"><a href="results.html" class="navLink">Results</a></li>
                        <li class="navItem"><a href="news.html" class="navLink">Users</a></li>
                      </ul>
                      <div class="button">
                          <a href="login.html">LOG IN</a>
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

             <!-- Login Section ======================== -->
    <section class=" loginSection section">
        <div class="sectionIntro">
            <h2 class="title">
                Coach/Admin Login
            </h2>
            <span class="subTitle">
                Be authentic, only admins.
            </span>
        </div>
        <div class="formContainer">
            <div class="overlay"></div>
            <form action="" method = 'post'>
                <div class="rows grid">
                    <div class="row">
                      <label for="username">User Name</label>
                      <input type="text" id="username" name="userName" placeholder="Enter your User Name" required>
                    </div>
        
                    <div class="row">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="passWord" placeholder="Enter Password" required>
                    </div>
        
                    <div class="row">
                        <input type="button" name="submit" class="submitBtn" value="Login">
        
                        <span class="registerLink"> <a href="#">*Forgot password?</a></span>
                    </div>
    
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

    <!-- swiper.js link -->
    <script src="swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="./main.js"></script>
</body>
</html>