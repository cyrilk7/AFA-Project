<?php

    require_once("connect.php");

?>

<?php 
    $query ="SELECT teamName FROM team";
    $result = $conn->query($query);

    $userquery ="SELECT * FROM user";
    $userresult = $conn->query($userquery);

    $userxteam = "SELECT teamId from coach INNER JOIN user ON coach.userId = user.userId";
    $userxteamresult = $conn->query($userxteam);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="addUser.css" />
    <link rel="stylesheet" href="trial/main.css">
    <!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add new user</title>

    <style>
        .removeuser {
            width: 90px;
            padding: 7px;
            outline: 1px solid white;
        }

        table {
            margin: 0 auto;
            border: 1px solid black;
            background: #141313;
        }

        tr{
            font-size: 18px;
        }

        h1 {
            text-align: center;
            color: #141313;
            font-size: xx-large;
        }


    </style>
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
                <li class="navItem"><a href="statistics.php" class="navLink">Statistics</a></li>
                <li class="navItem"><a href="profile-admin.php" class="navLink">Profiles</a></li> <!-- add charts so they see team performance -->
                <li class="navItem"><a href="fixture.php" class="navLink">Fixtures</a></li> 
                <li class="navItem"><a href="addUser.php" class="navLink">Users</a></li> 
                <li class="navItem"><a href="media.php" class="navLink">MediaCenter</a></li>
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
  <div id="standings">
    <h1 style="text-align:left">Welcome to the Users page!</h1>
    
    <?php
        if ( isset($_GET['fail']) && $_GET['fail'] == 1 ){
            // treat the succes case ex:
            // echo '<script>alert("User account already exists!")</script>';
            echo "User account already exists!";
        }
        if ( isset($_GET['success']) && $_GET['success'] == 1 ){
            // treat the succes case ex:
            // echo '<script>alert("Coach account successfully created!")</script>';
            echo "Coach account successfully created!";
        }  
        if ( isset($_GET['success']) && $_GET['success'] == 2 ){
            // treat the succes case ex:
            echo "Admin account successfully created!";
        } 
        if ( isset($_GET['fail']) && $_GET['fail'] == 2 ){
            // treat the succes case ex:
            echo "Account creation failed!";
        } 
    ?>

    
            <table id="league-table">
                <tr>
                    <th class="top-left">Username</th>
                    <th>Email</th>
                    <th>Year Group</th>
                    <th>Role</th>
                    <th>Team</th>
                    <th>Last Updated</th>
                    <th class="top-right">Delete</th>
                </tr>

                        <!-- 
                            PHP CODE TO FETCH DATA FROM ROWS 
                        -->
                <?php
                    while($tablerows=$userresult->fetch_assoc())
                    {
                ?>
                <tr>
                    <td class="bottom-left"><?php echo $tablerows['uname'];?></td>
                    <td><?php echo $tablerows['uemail'];?></td>
                    <td><?php echo $tablerows['yearGroup'];?></td>
                    <td><?php echo $tablerows['role'];?></td>
                    <td><?php echo $tablerows['team'];?></td>
                    <td><?php echo $tablerows['dateUpdated'];?></td>
 
                    <td class="bottom-right">
                        <a href="addUser_proc.php?del=<?php echo $tablerows['userId']; ?>" class="removeuser button"><i class="fas fa-trash edit-icon" style="color:black;"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <br>

            <button id="addUser" type="button" class="long-button" style="margin-left:87%">Add User</button> <br>
                </div>

    <!-- Modal Box -->
    <div id="addUserModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Create new user account</h2>
        </div>

        <div class="modal-body">
            <form
                name="form"
                id="form"
                method="POST"
                action="addUser_proc.php"
                class="userFormDiv"
            >
                <!-- Form input boxes -->
                <label class="formLabel"><b> Full Name </b></label>
                <br />
                <input
                class="userForm box"
                type="text"
                placeholder="Name of user"
                name="fullName"
                id="fullName"
                required
                />
                <br /><br />

                <label class="formLabel"><b> Username </b></label>
                <br />
                <input
                class="userForm box"
                type="text"
                placeholder="Username"
                name="username"
                id="username"
                required
                />
                <br /><br />

                <label class="formLabel"><b> User email </b></label> <br />
                <input
                class="userForm box"
                id="userEmail"
                type="text"
                placeholder="New user's email address"
                name="userEmail"
                required
                pattern="\w+([\.-]?\w+)*@*(ashesi\.edu\.gh?|aucampus\.onmicrosoft\.com)"
                />
                <br /><br />

                <label class="formLabel"><b> Password </b></label> <br />
                <input
                class="userForm box"
                id="password"
                type="text"
                placeholder="Temporary Password"
                name="password"
                required
                minlength="8"
                pattern="(?=.*\d)(?=.*[A-Z])(.{8,50})"
                />
                <br /><br />

                <label class="formLabel"><b> Gender </b></label>
                <select name="gender" id="gender">
                <option value=""></option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Prefer not to say</option>
                </select>
                <br /><br />

                <label class="formLabel"><b> Role </b></label>
                <select name="role" id="role">
                <option value=""></option>
                <option value="admin">Administrator</option>
                <option value="coach">Coach</option>
                </select>
                <br /><br />

                <label class="formLabel"><b> Year group </b></label> <br />
                <input
                class="userForm box"
                type="text"
                placeholder="User's year group"
                name="yearGroup"
                required
                />
                <br /><br />

                <label class="formLabel"><b> Team </b></label>
                <br />
                <select name="team" id="team">
                <?php 
                    while ($row = $result->fetch_assoc()) {
                        $value = $row['teamName'];
                        echo "<option value=\"$value\">" . $row['teamName'] . "</option>";
                    }
                ?>
                </select>
                <br /><br />

                <label class="formLabel"><b> Profile image </b></label> <br />
                <input type="file" name="userimg" id="userimg" accept="image/*" />
                <br /><br />
                
                <div class="center">
                <input 
                    id="submit"
                    name="submit"  
                    type="submit" 
                    class="button" 
                    value="Submit" 
                    onclick="ValidateEmail(document.form.userEmail); ValidatePassword(document.form.password)"/>
                </div>

            </form>
        </div>
      </div>
    </div>



    <!-- <script src="./bootstrap/js/bootstrap.js"></script> -->
    <script src="addUser.js"></script>
    <script>
        function ValidateEmail(emailInput) {
            // Check if email input is in the appropriate format
            var mailformat = /^\w+([\.-]?\w+)*@*(ashesi\.edu\.gh?|aucampus\.onmicrosoft\.com)+$/;
            if (emailInput.value.match(mailformat)) {
            // document.getElementById("email").style.border = "thin solid green";
            return true;
            } else {
            document.form.userEmail.focus();
            document.getElementById("userEmail").style.border = "thin solid red";
            return false;
            }
        }

        // function ValidatePassword(pwdInput) {
        //     // Check for at least one number, one uppercase letter, and minimum 8 characters in password input
        //     var pwdformat = /^(?=.*\d)(?=.*[A-Z])(.{8,50})$/;
        //     if (pwdInput.value.match(pwdformat)) {
        //     // document.getElementById("password").style.border = "thin solid green";
        //     return true;
        //     } else {
        //     document.form.password.focus();
        //     document.getElementById("password").style.border = "thin solid red";
        //     return false;
        //     }
        // }
   </script>
   
    </body>
</html>


