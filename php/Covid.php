<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/Covid.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Oswald"
    />
    <title>Home Page</title>
    <link rel="icon" href="../pics/airplane logo.png" />
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
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="Slogan">
        <h1>Current Regulations</h1>
      </div>
    </section>
    <section>
        <div id="Ctitle">
      <p >
        As a result of the coronavirus (covid-19) pandemic Middle East Airlines
        has put in place new health measures to ensure your comfort and well
        being. Please review our page for current entry requirements & safety
        guidelines.
      </p>
    </div>
      <nav id="Ereq">
        <div class="row">
        <div class="divR">
          <h1>Entry Requirements</h1>
          <p>
            Review the current entry requirements for your destination, and the
            measures and regulations at the airports of your departure and
            arrival. All passengers flying to Lebanon must read and fulfill the
            requirements prior to departure.
          </p>
        </div>
        
        <div class="divR">
          <h1>Online Check In</h1>
          <p>
            We strongly recommend to check in for your flight via our website or
            within the MEA app.
          </p>
        </div>
        <div class="divR">
          <h1>Contact details</h1>
          <p>
            Please fill the passenger locator form requested by the authorities
            to contact you if necessary.
          </p>
        </div>
    </div>
        <div class="row">
        <div class="divR">
          <h1>Hand Luggage</h1>
          <p>
            You are encouraged to travel as lightly as possible with all luggage
            checked-in except small hand luggage that fit under the seat.
          </p>
        </div>
    
    
        <div class="divR">
          <h1>Face Mask/ Disinfection</h1>
          <p>
            Please bring your own face mask and make sure you have enough mask
            for your journey. A mask should be replaced every 4 hours.Keep a
            hand sanitizer with you if you wish. Please pay close attention to
            the regulations for traveling with liquids in your carry-on luggage.
          </p>
        </div>
    </div>
    </nav>
    </section>
  </body>
</html>
