<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <title>Home Page</title>
    <link rel= "icon" href="../pics/airplane logo.png">
    <script src="../js/successful_account.js"></script>
</head>
<body>
    <?php session_start(); ?>
  <section class="header">
  <nav id="nav">
        <h2 class="logo"><a style="text-decoration: none; color:#fff;" href="Crew.php">HOPE</a></h2>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <?php
                if(isset($_SESSION["username"])){
                    echo "<li><a href='MYflights.php'>MYflights</a></li>";
                }
            ?>
            <li><a href="Main.php">HOME</a></li>
            <li><a href="ABOUT.php">ABOUT</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="CONTACT.php">CONTACT</a></li>
            <li class="dropdown">
                <?php
                if(!isset($_SESSION["username"])){
                    echo "<a class='dropbtn' href='Login.php'>LOGIN</a>";
                }
                else{
                    echo "<img src='../pics/profile.png' alt='profile pic' height='40px' width='40px'>";
                }
                ?>
              <div class="dropdown-content">
                <form action="/login" method="get">
                  <button class="transparent-btn" type="button" name="user">USER</button>
                </form>
                <form action="/admin" method="get">
                  <button class="transparent-btn" type="button" name="admin">ADMIN</button>
                </form>
                <form action="/register" method="get">
                  <button class="transparent-btn" type="button" name="register" >REGISTER</button>
                </form>
                <?php
                if(isset($_SESSION["username"])){
                    echo "<form action=\"logout.php\" method=\"post\">
                    <button class=\"transparent-btn\" type=\"submit\" name=\"register\" >LOGOUT</button>
                  </form>";
                }
                ?>
                
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="Slogan">
        <h1>Welcome To HOPE AIRLINES </h1>
        <p>Where the skies are your home</p>
        <?php 
        if(!isset($_SESSION["username"])){
            echo "<button type='submit' class='explore-btn transparent-btn' style='font-size:2rem;'><a href='../php/Login.php' style='text-decoration: none; color: white;'>Book a flight!</a></button>";
        }
        else{
            echo "<button type='submit' class='explore-btn transparent-btn' style='font-size:2rem;'><a href='../php/Flights.php' style='text-decoration: none; color: white;'>Book a flight!</a></button>";
        }
        ?>
      </div>
    </section>

  <section class="Desc">
    <h1>Enjoy your next destination with HOPE aviation</h1>
    <p>Wherever you want to go we got you covered, enjoy our state of the art technologies coupled with our incredible customer service.</p>
    
  </section>
  <section >
    <img src="https://www.qatarairways.com/content/dam/images/renditions/horizontal-1/privilege-club/brand/student-club/h1-student-club-middle-east.jpg" id="imgb">
    <div id="studentdiv">
      <h3>Aim for the skies with student club</h3>
      <p>Offering you exclusive benefits including special fares and more</p>
      <br>
      <a href="" id="studentlink">Join now</a>
      
    </div>
  </section>
  <section>
    
    
    <img src="https://global.unitednations.entermediadb.net/assets/mediadb/services/module/asset/downloads/preset/Libraries/Production+Library/15-01-2021-Unsplash-air-travel-01.jpg/image1170x530cropped.jpg" id="imgc">
    <div id="studentdiv">
      <h1>Our Covid-19 startegy</h1>
      <p>Offering you exclusive benefits including special fares and more</p>
      <br>
      <a href="Covid.php" id="studentlink">Join now</a>
      
    </div>
  </section>
    </body>
</html>