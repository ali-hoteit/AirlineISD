<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/FAQ.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <title>FAQ page</title>
    <link rel= "icon" href="../pics/FAQ.png">
</head>
<body>
<?php session_start(); ?>
    <section class="headerFB">
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
          <div class="SloganFB">
            <h1>Just tell us what you need to know</h1>
            <p>help us help you</p>
            
          </div>
        </section>
        <section>
          <div class="s-Container">
              <h2>Get in touch from anywhere <br> or directly contact one of our agents</h2>
              <div class="left-Box">
                  <form action="/action_page.php" method="get">
                      <input list="browsers" name="browser" id="browser" placeholder="e.g.Australia">
                      <datalist id="browsers" >
                          <option value="+61 004 245 4904">Australia</option>
                          <option value="+55 955 310 5659">Brazil</option>
                          <option value="+1 613 555 0139">Canada</option>
                          <option value="+86 591 462 2395">China</option>
                          <option value="+33 93 492 6640">France</option>
                          <option value="+49 30 596935912">Germany</option>
                          <option value="+39 06 958 6367">Italy</option>
                          <option value="+91 385 753 8240">India</option>
                          <option value="+62 77 5363 7545">Indonisia</option>
                          <option value="+81 75 521 9643">Japan</option>
                          <option value="+961 76 053 869">Lebanon</option>
                          <option value="+52 888 490 4145">Mexico</option>
                          <option value="+31 71 232 3772">Netherlands</option>
                          <option value="+41 33 112 4011">Switzerland</option>
                          <option value="+1 202 555 0148">United States</option>
                      </datalist>
                      
                    </form>
              <div class="right-P">
                  <img src="../pics/ABout-rightp.jpg" alt="" class="image">
                  <div class="middle"><a href="CONTACT.html">Contact Us!</a></div>
              </div>
                    
              </div>
          </div>
      </section>
      
        <section class="FAQ-x">
          <h1 class="q-title">FAQs</h1>
          <details class="FAQ-d">
            
            <summary class="FAQ-s">How far in advance can I book a flight online</summary>
            <div class="FAQ-c">
            <p class="FAQ-p">Online booking is available for any flights up to <span style="color: red;">6 hours</span> before scheduled departure time.</p>
            <p class="FAQ-p">Booking cannot be made after a period exceeding <span style="color: red;">360 days</span>.</p>
          </div>
          </details>
          <details class="FAQ-d">
            <summary class="FAQ-s">Travelling with pets</summary>
            <div class="FAQ-c">
              <p class="FAQ-p">You may travel with one <span style="color: red;">1</span> falcon in cabin per passenger.</p>
              <p class="FAQ-p">You may also travel with one up to two <span style="color: red;">2</span> service dogs in the cabin per passenger.</p>
              <p class="FAQ-p">There is no limit to the number of pets that can travel as checked baggage, however there may be weight or space limitations based on aircraft type.</p>
            </div>          </details>
          <details class="FAQ-d">
            <summary class="FAQ-s">Do I have to wear a face mask?</summary>
            <div class="FAQ-c">
              <p class="FAQ-p">Wearing a face mask is <span style="color: red;">optional</span> in the UAE and on Emirates flights. If you are travelling from or transiting through Dubai International, the mask rules of your destination will apply throughout your journey.</p>
            </div>
            
          </details>
            <details class="FAQ-d">
              <summary class="FAQ-s"> Which Internet browsers can we use to book on mea.com.lb?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">Google Chrome</p>
                <p class="FAQ-p">Firefox</p>
                <p class="FAQ-p">Microsoft Edge</p>
                <p class="FAQ-p">Safari</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">How many passengers can I book online in one transaction?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">Only <span style="color: red;">nine </span>passengers maximum can be booked for adult (s) + children+ infant
                  Number of Infant should be less than or equal to number of adults.</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">Can I book online a child or infant?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">You can if accompanied with an adult.</p>
                <p class="FAQ-p">Please refer to our local sales office or call center to book and buy ticket for child/infant without an adult.</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">Can I make multiple destinations booking online?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p"><span style="color: red;">Yes</span>, through Multi-Destination option.</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">Can someone else purchase my ticket?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">To avoid denied boarding credit card used for online payment should be presented at airport upon check.</p>
                <p class="FAQ-p">A <span style="color: red;">clear</span> passport photocopy of the credit card owner with copy of the card used (showing only the first 6 digits and last 4 digits) should be presented at check in desk.</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">What is FRAUD?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">Fraud is an act of <span style="color: red;">deception</span> intended for personal gain or to cause a loss to another party.</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">What can I do if I see an unauthorized transaction on my credit card?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">If you notice any <span style="color: red;">unauthorized</span> transection on your card, please report it to your credit card issuing bank.</p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">How long does it take to get my ticket refunded</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">Due to a large number of requests our processing time is <span style="color: red;">longer</span> than usual. We thank you for you patience and understanding. </p>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">I’m traveling with my baby, can I check in online?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p">No, for more information please refer to “registration conditions” upon check in
                  Online check in WILL NOT apply:</p>
                <ul>
                  <li class="FAQ-p">If you do not hold the necessary <span style="color: red;">valid travel documents</span>.</li>
                  <li class="FAQ-p">If your baggage includes pets or live animals.</li>
                  <li class="FAQ-p">If your departure city is: <span style="color: red;">Al Najaf</span>.</li>
                </ul>
            </div>
          
        </details>
            <details class="FAQ-d">
              <summary class="FAQ-s">Can I change my seat after the check in?</summary>
              <div class="FAQ-c">
                <p class="FAQ-p"><span style="color: red;">Yes</span>, click again on “check in” and then select “change seat”.</p>
            </div>
          </details>
        </section>
</body>
</html>
