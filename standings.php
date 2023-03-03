<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="trial/main.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
            <li class="navItem"><a href="statistics.php" class="navLink">Statistics</a></li>
            <li class="navItem"><a href="profile.php" class="navLink">Profiles</a></li> <!-- add charts so they see team performance -->
            <li class="navItem"><a href="media.php" class="navLink">Media Center</a></li>
          </ul>
          <div class="button">
              <a href="login.php">LOG IN</a>
          </div>
          <small>*Only club representatives.</small>
    </div>
    <div class="navBarBtn">
        <i class="uil uil-bars icon"></i>
    </div>
</div>

</div>
    <div id="standings">
        <h1 style="color: white;"> League Table </h1>
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
                <td> Elite FC </td>
                <td>2</td>                      
                <td>2</td>               
                <td>0</td>           
                <td>0</td>              
                <td>4</td>          
                <td>1</td>              
                <td>3</td>   
                <td>2</td>         
            </tr>
            <tr>
                <td> 2 </td>
                <td> Red Army </td>
                <td>2</td>                      
                <td>1</td>               
                <td>0</td>           
                <td>1</td>              
                <td>6</td>          
                <td>1</td>              
                <td>5</td>      
                <td>1</td>
            </tr>
            
            <tr>
                <td> 3 </td>
                <td> Northside FC </td>
                <td>2</td>                      
                <td>1</td>               
                <td>0</td>           
                <td>1</td>              
                <td>6</td>          
                <td>1</td>              
                <td>5</td>                  
                <td>1</td>   
            </tr>
            <tr>
                <td> 4 </td>
                <td> Highlanders FC </td>
                <td>2</td>                      
                <td>1</td>               
                <td>0</td>           
                <td>1</td>              
                <td>1</td>          
                <td>3</td>              
                <td>-2</td>               
                <td>1</td>  
            </tr>
            <tr>
                <td> 5 </td>
                <td> Legends FC </td>
                <td>1</td>                      
                <td>1</td>                      
                <td>0</td>               
                <td>0</td>           
                <td>1</td>              
                <td>0</td>                      
                <td>-2</td>
                <td>0</td>  
            </tr>
            <tr>
                <td> 6 </td>
                <td> Kasanoma FC </td>
                <td>1</td>                      
                <td>0</td>               
                <td>0</td>           
                <td>1</td>              
                <td>1</td>          
                <td>4</td>              
                <td>-3</td>     
                <td> 0 </td>
            </tr>
        </table>
    </div>

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
    <script src="trial/swiper-bundle.min.js"></script>
    <!-- link javascript -->
    <script src="trial/main.js"></script>
     <script src="./bootstrap/js/bootstrap.js"></script>
     
    
</body>
</html>


