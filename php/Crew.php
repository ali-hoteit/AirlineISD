<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Crew.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
        <title>HOPE Crew</title>
        <link rel= "icon" href="../pics/crew.jpg">
    </head>
    <body>
    <?php session_start(); ?>
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
        <p style="height: 80px;"></p>
        <p style="text-align: center; font-size: 80px;"><strong>Pilots</strong></p>
        <center>
            <div style="text-align: center; width: 99%; display: flex; justify-content: center; align-items: center;">
                <div class="flip-card">
                    <h1>Jaydan Lynch 👨‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Jaydan Lynch</h1></center>
                            <p>Flights achieved: 301</p>
                            <p>FAA Certificate: Commercial Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="17"></meter><br>
                            <img src="../pics/male1 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
        
                <div class="flip-card">
                    <h1>Wade Kaye 👨‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Wade Kaye</h1></center>
                            <p>Flights achieved: 184</p>
                            <p>FAA Certificate: Commercial Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="16"></meter><br>
                            <img src="../pics/male2 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Bethanie Watkins 👩‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Bethanie Watkins</h1></center> 
                            <p>Flights achieved: 420</p>
                            <p>FAA Certificate: Airline Transport Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="15"></meter><br>
                            <img src="../pics/female1 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Aleena Graham 👩‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Aleena Graham</h1></center>
                            <p>Flights achieved: 367</p>
                            <p>FAA Certificate: Airline Transport Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="14"></meter><br>
                            <img src="../pics/female2 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

            </div>
        </center>
        <center style="margin-top: 60px;">
            <div style="text-align: center; width: 99%; display: flex; justify-content: center; align-items: center;">
                <div class="flip-card">
                    <h1>Nia Palacios 👩‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Nia Palacios</h1></center> 
                            <p>Flights achieved: 341</p>
                            <p>FAA Certificate: Private Pilot </p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="17"></meter><br>
                            <img src="../pics/female3 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
        
                <div class="flip-card">
                    <h1>Elliot Bell 👨‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Elliot Bell</h1></center> 
                            <p>Flights achieved: 285</p>
                            <p>FAA Certificate: Private Pilot </p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="18"></meter><br>
                            <img src="../pics/male3 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Anderson Myers 👨‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Anderson Myers</h1></center> 
                            <p>Flights achieved: 183</p>
                            <p>FAA Certificate: Recreational Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="17"></meter><br>
                            <img src="../pics/male4 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Jeffrey Raymond 👨‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Jeffrey Raymond</h1></center> 
                            <p>Flights achieved: 298</p>
                            <p>FAA Certificate: Commercial Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="16"></meter><br>
                            <img src="../pics/male5 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

            </div>
        </center>
        <center style="margin-top: 60px;">
            <div style="text-align: center; width: 99%; display: flex; justify-content: center; align-items: center;">
                <div class="flip-card">
                    <h1>Simeon Ramirez 👨‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Simeon Ramirez</h1></center> 
                            <p>Flights achieved: 431</p>
                            <p>FAA Certificate: Recreational Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="15"></meter><br>
                            <img src="../pics/male6 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
        
                <div class="flip-card">
                    <h1>Elle Shepard 👩‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Elle Shepard</h1></center> 
                            <p>Flights achieved: 381</p>
                            <p>FAA Certificate: Sport Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="14"></meter><br>
                            <img src="../pics/female4 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Zoe Prince 👩‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Zoe Prince</h1></center> 
                            <p>Flights achieved: 109</p>
                            <p>FAA Certificate: Student Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="13"></meter><br>
                            <img src="../pics/female5 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Eliza Mckenzie 👩‍✈️</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Eliza Mckenzie</h1></center> 
                            <p>Flights achieved: 96</p>
                            <p>FAA Certificate: Student Pilot</p> 
                            <label for="skills">Skills:</label>
                            <meter id="skills" min="0" max="20" value="10"></meter><br>
                            <img src="../pics/female6 pilot.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <p style="text-align: center; font-size: 80px; padding-top: 50px;"><strong>Airport Managers</strong></p>
        <center>
            <div style="text-align: center; width: 99%; display: flex; justify-content: center; align-items: center;">
                <div class="flip-card">
                    <h1>Ashraf Farrington 👨‍💼</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Ashraf Farrington</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="85" max="100"></progress>
                            <br>
                            <label for="skillps">Problem-Solving skills:</label>
                            <progress id="skillps" value="90" max="100"></progress>
                            <br>
                            <label for="skillo">Organisational skills:</label>
                            <progress id="skillo" value="80" max="100"></progress>
                            <img src="../pics/male2 manager.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
        
                <div class="flip-card">
                    <h1>Kiah Maxwell 👨‍💼</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Kiah Maxwell</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="80" max="100"></progress>
                            <br>
                            <label for="skillps">Problem-Solving skills:</label>
                            <progress id="skillps" value="83" max="100"></progress>
                            <br>
                            <label for="skillo">Organisational skills:</label>
                            <progress id="skillo" value="90" max="100"></progress>
                            <img src="../pics/male1 manager.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Hetty Rodrigues 👩‍💼</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Hetty Rodrigues</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="95" max="100"></progress>
                            <br>
                            <label for="skillps">Problem-Solving skills:</label>
                            <progress id="skillps" value="70" max="100"></progress>
                            <br>
                            <label for="skillo">Organisational skills:</label>
                            <progress id="skillo" value="85" max="100"></progress>
                            <img src="../pics/female1 manager.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Niyah Hodge 👩‍💼</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Niyah Hodge</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="80" max="100"></progress>
                            <br>
                            <label for="skillps">Problem-Solving skills:</label>
                            <progress id="skillps" value="100" max="100"></progress>
                            <br>
                            <label for="skillo">Organisational skills:</label>
                            <progress id="skillo" value="90" max="100"></progress>
                            <img src="../pics/female2 manager.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <p style="text-align: center; font-size: 80px; padding-top: 50px;"><strong>Flight Attendants</strong></p>
        <center>
            <div style="text-align: center; width: 99%; display: flex; justify-content: center; align-items: center;">
                <div class="flip-card">
                    <h1>Niam Felix &#128104;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Niam Felix</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="85" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="95" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="80" max="100"></progress>
                            <img src="../pics/male1 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
        
                <div class="flip-card">
                    <h1>Marco Douglas &#128104;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Marco Douglas</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="85" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="70" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="80" max="100"></progress>
                            <img src="../pics/male2 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Lennie Swan &#128105;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Lennie Swan</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="80" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="90" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="85" max="100"></progress>
                            <img src="../pics/female1 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Nada Clarke &#128105;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Nada Clarke</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="90" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="80" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="70" max="100"></progress>
                            <img src="../pics/female2 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <center style="margin-top: 60px;">
            <div style="text-align: center; width: 99%; display: flex; justify-content: center; align-items: center;">
                <div class="flip-card">
                    <h1>Shanna Huang &#128105;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Shanna Huang</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="85" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="95" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="80" max="100"></progress>
                            <img src="../pics/female3 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
        
                <div class="flip-card">
                    <h1>Aurora Boyer &#128105;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Male2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Aurora Boyer</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="85" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="70" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="80" max="100"></progress>
                            <img src="../pics/female4 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Rayan Bloom &#128104;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female1.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Rayan Bloom</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="80" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="90" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="85" max="100"></progress>
                            <img src="../pics/male3 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <h1>Zi Finney &#128104;</h1>
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../pics/Female2.jpg" alt="Avatar" style="width: 350px; height: 350px;">
                        </div>
                        <div class="flip-card-back">
                            <center><h1>Zi Finney</h1></center>
                            <label for="skillc">Communication skills:</label>
                            <progress id="skillc" value="90" max="100"></progress>
                            <br>
                            <label for="skilli">Interpersonal skills:</label>
                            <progress id="skilli" value="80" max="100"></progress>
                            <br>
                            <label for="skilla">Attentiveness skills:</label>
                            <progress id="skilla" value="70" max="100"></progress>
                            <img src="../pics/male4 att.jpg" height="200" width="150">
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </body>
</html>