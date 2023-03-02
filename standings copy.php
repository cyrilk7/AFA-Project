<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title> Standings </title>
    <style>
        #league-table2 {
            font-family: Poppins;
            font-weight: 600;
            font-size: 23px;
            background: #260307;
            /* border-collapse: collapse; */
            border-spacing: 0 30px;
            width: 100%;
            color:white;
            border-left-width: thick;
        }
        
        #league-table2 td {
            /* border: 1px solid white; */
            padding: 8px;
            background: #6E0D18;
        }
        
        #league
        /* #league-table2 tr:nth-child(even){background-color: #D1D9D3;}
        #league-table2 tr:nth-child(odd){background-color: white;} */
        
        #league-table2 tr:hover {background-color: #ddd;}
        
        #league-table2 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color:#260307;
            color: white;
        }
    </style>
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
                <i class="fas fa-bars fa-2x" id="bar"></i>
                <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                
                           
            </ul>
    
    
        </div>
    </div>
    <div id="standings">
        <h1> League Table </h1>
        <table id="league-table2">
            <tr>
                <th> # </th>
                <th> Rank </th>
                <th> MP </th>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>GF</th>
                <th> GA</th>
                <th> GD </th>
                <th> PTS </th>
            </tr>
            <tr>
                <td> 1 </td>
                <td> Elite </td>
                <!-- MP -->
                <td> 23 </td>
                <!-- Wins -->
                <td> 7 </td>
                <!-- Draws -->
                <td> 2 </td>
                <!-- Losses -->
                <td> 1 </td>
                <!-- Goals For -->
                <td> 5 </td>
                <!-- Goals for -->
                <td> 6 </td>
                <!-- Goals against -->
                <td> 3 </td>
                <!-- Goal difference -->
                <td> -6 </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> Kasanoma </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
            </tr>
            
            <tr>
                <td> 3 </td>
                <td> Northside </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> Red Army </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
            </tr>
            <tr>
                <td> 5 </td>
                <td> Legends United </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
            </tr>
            <tr>
                <td> 6 </td>
                <td> Highlanders </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
                <td> 0 </td>
            </tr>
        </table>
    </div>
    
</body>
</html>


