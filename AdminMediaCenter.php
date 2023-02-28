<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\styles.css"/>
        <link rel="stylesheet" href="css\mediastyle.css"/>
        <link rel="stylesheet" href="css\AddVideoStyle.css"/>

      </head>

      <title> Media Center </title>


      <header class = "header">
        <div class="navbar-local">
            <div class="container-local">
                <div class= logobox-local>
                    <img class="logo-local" src="images/Group 1.svg" alt="logo">
                </div>
                <ul class="links-local">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="standings.html">League Tables</a></li>
                    <li><a href="Statistics.html">Statistics</a></li>
                    <li><a href="Profile.html">Profile</a></li>  
                    <li><a href="Media Center.html">Media Center</a></li>  
                    <li><a href = "#"><button id="addUser" 
                        class="addUser button">Add Videos</button></a></li>
                    <li><a href="login.php"><button id="login"> Edit Content </button> </a></li>
                    
                    <!-- <li><a href="login.html"><button id="login" data-toggle="modal" data-target="#loginModal"> Log In </button>   </a></li> -->
                    
                            
                </ul>
        
        
            </div>
        </div>
        <h2 id = Media-Title> Media Center</h2>
       

    </header>

      <body>        
    
        <div id="addUserModal" class="modal">
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
              >
                <!-- Form input boxes -->
                <label class="formLabel"><b> Video Title </b></label>
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
    
      
      

    <main>
        <div class = "content">
            <div class = "videos">
            
                <div class = "video">
                    <div class = "thumbnail" >
                        <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image1" src = "images/Media6.jfif"></a>
                    </div>
                    <div class = "vid-info">
                        
                        <div class = "title">
                           <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink"><h3>Elite vs Kasanoma - Match Highlights </h3></a>
                        </div>
                        <a href = " "> 
                            APL • Upload Date
                            </a>
                    </div>
                </div>
            
            <div class = "video">
                <div class = thumbnail>
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image2" src = "images/Media1.jfif" alt = ""></a>
    
                </div>
                <div class = vid-info>
                    <div class = title> 
                     <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink">Northside vs Red Army</h3>
                    </div>
                    <a href = "">
                        APL • Upload Date   
                    </a>
    
                </div>
    
            </div>
    
            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image3" src = "images/Media2.jfif"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink">Northside Ladies vs Red Army Women - Match Highlights </h3>
                    </div>
                    <a href = " "> 
                        AWPL • Upload Date
                        </a>
                </div>
            </div>

            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image3" src = "images/Media3.jfif"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink">Elite Ladies vs Kasanoma Women - Match Highlights </h3>
                    </div>
                    <a href = " "> 
                        AWPL • Upload Date
                        </a>
                </div>
            </div>

            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image5" src = "images/Media4.jfif"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink"> Red Army vs Kasanoma - Match Highlights </h3>
                    </div>
                    <a href = " "> 
                        AFA • Upload Date
                        </a>
                </div>
            </div>

            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image6" src = "images/Media5.jfif"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink"> Legends United vs Elite FC </h3>
                    </div>
                    <a href = " "> 
                        AFA • Upload Date
                        </a>
                </div>
            </div>

            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image6" src = "images/Media7.png"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink"> APL Press Conference </h3>
                    </div>
                    <a href = " "> 
                        AFA • Upload Date
                        </a>
                </div>
            </div>
    
            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image6" src = "images/Media8.png"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink"> Fan Reactions </h3>
                    </div>
                    <a href = " "> 
                        AFA Social• Upload Date
                        </a>
                </div>
            </div>

            <div class = "video">
                <div class = "thumbnail" >
                    <a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img id = "Image6" src = "images/Media9.png"></a>
                </div>
                <div class = "vid-info">
                    <div class = "title">
                       <h3><a href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" class = "vidlink"> APL Press Conference </h3>
                    </div>
                    <a href = " "> 
                        AFA • Upload Date
                        </a>
                </div>
            </div>
    
    
            </div>
        </div>
        
    </main>
    <script src="addVideos.js"></script>
</body>
</html>