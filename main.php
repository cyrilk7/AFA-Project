<!--  
    MAIN PAGE FOR USERS WITH ADMIN ACCESS
-->

<?php
    // session_start(); 

    // if(!isset($_SESSION['username'])){
    //     header("Location:signIn.php");
    // }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main</title>
    <link rel="stylesheet" href="sidebar.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
        font-family: Arial;
        }

        /* RESPONSIVENESS */
        @media (max-width: 1700px) {
        .cards {
            justify-content: center;
        }
        }
    </style>
  </head>

  <body>
    <nav id="nav" class="sidebar">
      <div class="logo-details">
        <div class="logo_name">SSL CMS</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#" data-target="home.php">
            <i class="bx bx-home"></i>
            <span class="links_name">Home</span>
          </a>
          <span class="tooltip">Home</span>
        </li>
        <li>
          <a href="#" data-target="newrequest.php">
            <i class="bx bx-add-to-queue"></i>
            <span class="links_name">New Request</span>
          </a>
          <span class="tooltip">New Request</span>
        </li>
        <li>
          <a href="#" data-target="users.php">
            <i class="bx bx-group"></i>
            <span class="links_name">Users</span>
          </a>
          <span class="tooltip">Users</span>
        </li>
        <li>
          <a href="#" data-target="requests.php">
            <i class="bx bxs-message-check"></i>
            <span class="links_name">Requests</span>
          </a>
          <span class="tooltip">Requests</span>
        </li>
        <li>
          <a href="#" data-target="certificates.php">
            <i class="bx bx-certification"></i>
            <span class="links_name">Certificates</span>
          </a>
          <span class="tooltip">Certificates</span>
        </li>
        <li>
            <a href="#" id="signout">
              <i class="bx bx-log-out"></i>
              <span class="links_name" on>Sign Out</span>
            </a>
            <span class="tooltip">Sign Out</span>
        </li>
      </ul>
    </nav>

    <section id="home-section" class="home-section"></section>

    <!-- SCRIPTS -->
    <script src="sidebar.js"></script>  <!-- script for the sidebar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("submit").click(function(){
                location.reload(true);
            });
        });

        document.getElementById("signout").addEventListener("click", myFunction);
        function myFunction() {
            window.location.href = "signOut.php";
        }

        $(document).ready(function () {
            $('#home-section').load("home.php");
        });

        $(document).ready(function () {
            var trigger = $("#nav ul li a"),
                container = $("#home-section");

            trigger.on("click", function () {
                var $this = $(this),
                    target = $this.data("target");

                container.load(target);
                return false;
            });
        });

    </script>
  </body>
</html>
