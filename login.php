<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        input:focus{
            background-color: #FCFBF4;
        }
    </style>
    <title> Log In </title>

</head>
<body>
    <div class="login-container">
        <div class="left">
            <!-- <img src="images/login-img.png" alt="" id="login-img"> -->
            <h1 class="login-text"> Everything you need. <br> All in one place. </h1>
            <a href="index.php"> <button id="back2home" class="long-button" > Back to Home</button> </a>
            <h1></h1>

        </div>
        <div class="right">
            <h1 class="login-text"> Log In </h1>
            <p class="p-white"> Welcome back! Sign in to access all features</p>
            <br>
            <br>
            <form action="login_proc.php" method="POST">
                <label for="username"> <p class="p-white">Username </p> </label>
                <br>
                <input type="text" name="username">
                <br>
                <label for="password"> <p class="p-white"> Password </p> </label>
                <br>
                <input type="text" name="pass">
                <br>
                <button id="login-submit" class="long-button"> Sign In </button>

              
            </form>

        </div>
    </div>
    
</body>
</html>