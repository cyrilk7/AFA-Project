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
    <title>Add new user</title>

    <style>
        .removeuser {
            width: 90px;
            padding: 7px;
            border-radius: 10px;
            outline: 1px solid white;
        }

        table {
            margin: 0 auto;
            font-size: 18px;
            border: 1px solid black;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            background: #141313;
        }

        h1 {
            text-align: center;
            color: #141313;
            font-size: xx-large;
            /* font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif'; */
        }

        td {
            background: white;
            border: 1px solid black;
        }

        .top-left {
            border-top-left-radius: 25px;
        }

        .top-right {
            border-top-right-radius: 25px;
        }

        .bottom-right {
            background: none;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            font-weight: bold;
            background: #141313;
            color: white;
        }

        /* section {
            margin: 0% 1.5% 2% 1%;
        } */

        section {
            margin: 2% 1% 2% 1%;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .update {
            margin-top: 5px;
            padding: 4px;
            width: 90px;
            border-radius: 10px;
            outline: 1px solid white;
        }
    </style>
  </head>
  <body>

    <h2>Welcome to the Users page!</h2>
    <button id="addUser" type="button" class="addUser button">Add User</button> <br>
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

    <section>
            <table>
                <tr>
                    <th class="top-left">Username</th>
                    <th>Email</th>
                    <th>Year Group</th>
                    <th>Role</th>
                    <th>Team</th>
                    <th>Last Updated</th>
                    <th>Edit</th>
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
                    <td class="bottom-right" id="editUser">
                        <a href="addUser_proc.php?edit=<?php echo $tablerows['userId']; ?>" class="removeuser button">Update</a>
                    </td>
                    <td class="bottom-right">
                        <a href="addUser_proc.php?del=<?php echo $tablerows['userId']; ?>" class="removeuser button">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </section>

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


