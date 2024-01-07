<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ABOUT.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <title>ABOUT US</title>
    <link rel= "icon" href="../pics/AboutLogo.png">
</head>
<body>
<?php session_start(); ?>
    <section class="headerAU">
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
            <h1>About Us </h1>
            <hr id="hr-0">
            <p><a class="Home-Dir" href="Main.php">Home</a> / About Us</p>      
          </div>

          <center>
            <div class="logos">
              <a href="https://facebook.com/" target="_blank"><img src="../pics/facebook logo.png" alt="facebook logo" width="60"></a> 
              <a href="https://instagram.com/" target="_blank"><img src="../pics/insta logo.png" alt="insta logo" width="60"></a>
              <a href="https://twitter.com/" target="_blank"><img src="../pics/twitter logo.png" alt="twitter logo" width="60"></a>
            </div>
          </center>
        </section>
        <section>
          <div class="imgs-A">
            <img src="https://c.ekstatic.net/ecl/explore-destination/nature-and-scenery/sunlit-mountains-w768x480.jpg?h=qjg3LAjV4mwAjijo2-z_Zg&quot" alt="" class="img-z">
            <img src="https://c.ekstatic.net/ecl/people/family/asian-family-planting-a-tree-w768x480.jpg?h=j2fklX9h2HVKxsOwBwzSgQ&quot" alt="" class="img-z">
            <img src="https://c.ekstatic.net/ecl/emirates-staff/ground-staff/group-of-our-people-768x480.jpg?h=JUQOuaEtpmnHeNdy1Lshdg&quot" alt="" class="img-z">
            
          </div>
          
          <div id="desc-c">
            <div id="desc-1">
              <p>Our people <hr id="hr-p"> <br> Our dynamic and diverse workforce are at the heart of our success.</p>
            </div>

            <div id="desc-1">
              <p>Our planet <hr id="hr-p"> <br> We are fully committed to responsible business and environmental stewardship.</p>
            </div>

            <div id="desc-1">
              <p>Our communities <hr id="hr-p"> <br> We contribute to vibrant economies and communities.</p>
            </div>
          </div>
        </section>
        <section>
            <div class="blah-p">
                <p>Hope Airways is proud to be one of the youngest global airlines to serve all six continents, and thanks to our customers’ response to our offerings, we are also the world’s fastest-growing airline. We connect more than 140 destinations on the map every day, with a fleet of the latest-generation aircraft, and an unrivalled level of service from our home and hub, the Five-star airport, Hamad International Airport in Doha, the State of Hope.</p>
                <p>As aviation faces its greatest challenge, we remain committed to ensuring the highest standards of safety and hygiene on board our aircraft at all times. Hope Airways is the first global airline in the world to achieve the prestigious 5-Star COVID-19 Airline Safety Rating by international air transport rating organisation, Skytrax. This follows HIA’s success as the first airport in the Middle East and Asia to be awarded a Skytrax 5-Star COVID-19 Airport Safety Rating. These recognitions provides assurance to passengers across the world that airline health and safety standards are subject to the highest possible standards of professional, independent scrutiny and assessment.</p>
                <p>Since our launch in 1997, Hope Airways has earned many awards and accolades, becoming one of an elite group of airlines worldwide to have earned a 5-star rating by Skytrax. Voted Airline of the Year by Skytrax in 2011, 2012, 2015, 2017, 2019 and most recently in 2021, Hope Airways has won the confidence of the travelling public. We have accomplished these goals by focusing on the details – how we run the business, and how you experience our airline.</p>
                <p>My goal is to make Hope Airways your airline of choice, offering the flights you want to the destinations you need. It is this which drives our collective mission to achieve ‘Excellence in everything we do’ at all levels across our Hope Airways family of highly-skilled and committed professionals, from across the globe.&nbsp;</p>
                <p>On behalf of everyone at Hope Airways, we look forward to welcoming you on board, and let us Go Places Together.</p>
                <p><br>
                Thank you.<br>
                <br>
                Ali hoteit
                <br>
              Jaafar tanoukhi
              </p>
                <p>C.E.O</p>
                <p>Hope Airways</p>    
            </div>
        </section>
        
</body>
</html>