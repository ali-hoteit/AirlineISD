<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/feedback.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Oswald"
    />

    <title>feedback page</title>
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

    <div class="SloganFC">
      <h1>Feedback or complaints</h1>
      <p>help us help you</p>
    </div>
    <section>
    <div class="warning">
        <h3>We can’t respond to requests for help through this form</h3>
        <p>
          We’re unable to help with your travel plans and upcoming bookings
          through this form. Please only use this form to give us feedback or
          make a complaint about a flight or service you’ve taken in the past.
          If you’re travelling soon and you need help with a booking, please
          call us. We understand that it can take time to get through to our
          Contact Centres as we are receiving a large volume of calls.
        </p>
      </div>

    <form class="fbForm">
      <fieldset>
        <legend class="fbTitle">Personal Details</legend>

        <p>
          <label>
            Salutation
            <br />
            <select name="salutation">
              <option>--None--</option>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
              <option>Dr.</option>
              <option>Prof.</option>
            </select>
          </label>
        </p>

        <p>
          <label
            >First name: <input placeholder="eg. John" name="firstName"
          /></label>
        </p>

        <p>
          <label
            >Last name: <input placeholder="eg. Doe" name="lastName"
          /></label>
        </p>

        <p>
          Gender :
          <label><input type="radio" name="gender" value="male" /> Male</label>
          <label
            ><input type="radio" name="gender" value="female" /> Female</label
          >
        </p>

        <p>
          <label
            >Email:<input
              placeholder="eg. John.doe@email.com"
              type="email"
              name="email"
          /></label>
        </p>

        <p>
          <label>Date of Birth:<input type="date" name="birthDate" /></label>
        </p>

        <p>
          <label>
            feedback :
            <br />
            <textarea name="feedback" cols="30" rows="3"></textarea>
          </label>
        </p>

        
        <p><a href="feedbackreceived.html">Submit</a></p>
      </fieldset>
    </form>
    
    <hr>
    <form class="fbForm">
        <fieldset>
            
                <h4>Passenger Confirmation</h4>
                <hr>
                <br>
                <label><input type="radio" name="rad">I am writing on behalf of the passenger. </label>
                <br>
                <label><input type="radio" name="rad">I am the passenger. </label>
                <p>For more information on how we store and use your personal data, please see our <a href="" id="testa">privacy policy</a>.</p>
            
        </fieldset>
    </form>
</section>
  </body>
</html>
