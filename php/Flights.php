<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/flights.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
        <title>HOPE flights</title>
        <link rel= "icon" href="../pics/plane_head.png">
        <script src="../js/flights.js"></script>
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
                  if($_SESSION["username"] == "Admin"){
                    echo "<li><a href='MYflights.php'>MYflights</a></li>";
                    echo "<img src='12.png' onerror='adminint()' style='display: none;'>";
                  }
                  else {
                    echo "<li><a href='MYflights.php'>MYflights</a></li>";
                    echo "<img src='12.png' onerror='userint()' style='display: none;'>";
                  }
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
        <center>
        <table id="table">
            <thead>
                <tr id="tablehead">
                    <th>Flight ID &#9992;</th>
                    <th>From <sub style="font-size: 20px;">(country)</sub>&#127758;</th>
                    <th>To  <sub style="font-size: 20px;">(country)</sub>&#127758;</th>
                    <th>Year-Month-Day &#128197;</th>
                    <th>Departure Time &#128348;</th>
                    <th>Arrival Time &#128344;</th>
                    <th>Available Seats &#128186;</th>
                    <th>More Info &#8505;&#65039;</th>
                </tr>
            </thead>
            <tbody id="tablebody">
                <?php
                $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");
                $query = "SELECT * FROM `flight`";
                $result = $conn->query($query);
                $count = 0;
                if ($result->num_rows > 0) {
                    $result->data_seek(0);
                    while ( $row = $result->fetch_assoc() )
                    {
                        $count++;
                        echo "<tr class='rows'>";
                        echo "<form action='Flight_info.php' method='post'>";
                        echo "<input type='hidden' name='Flight_ID' value='".$row["FLight_ID"]."'>";
                        echo "<td id='ID$count'>". $row["FLight_ID"] ."</td>";
                        echo "<td id='FROM$count'>". $row["From_country"] ."</td>";
                        echo "<td id='TO$count'>". $row["To_country"] ."</td>";
                        echo "<td id='date$count'>". $row["Date"] ."</td>";
                        echo "<td id='DEP_TIME$count'>". $row["Departure_time"] ."</td>";
                        echo "<td id='ARV_TIME$count'>". $row["Arrival_time"] ."</td>";
                        echo "<td id='SEATS$count'>". $row["Seats"] ."</td>";
                        if($row["Seats"] == 0){
                          echo "<td id='Button Book$count'> <input type='submit' value='Press' name='submitt' id='Button Book$count' class='moreinfobut' disabled> </td>";
                        }
                        else{
                          echo "<td id='Button Book$count'> <input type='submit' value='Press' name='submitt' id='Button Book$count' class='moreinfobut'> </td>";
                        }
                        if ($_SESSION["username"] == "Admin") {
                          echo "<td> <input type='submit' name='deleteflight' value='  X  ' style='color: red; font-size: large;' formaction='Flights.php'> </td>";
                        }
                        echo "</form>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>    
        </table>
        </center>
        <br>
        </script>
        <div class="formclass">
            <form id="admin_form" style="visibility: hidden;" method="post" action="Flights.php">
                <fieldset>
                    <legend><strong>Flight information</strong></legend>
                    <input type="text" id="input_id" name="flight_id" maxlength="6" pattern="[0-9]{6}" placeholder="flight id (6 digits only)" class="inputfields" required>
                    <br>
                    <input type="text" id="input_from" name="from" placeholder="from (country)" class="inputfields" required>
                    <br>
                    <input type="text" id="input_to" name="to" placeholder="to (country)" class="inputfields" required>
                    <br>
                    <label for="input_date" style="font-size: x-large;">Date:</label>
                    <input type="date" id="input_date" name="date" class="inputfields" required>
                    <br>
                    <label for="input_depttime" style="font-size: x-large;">Departure time:</label>
                    <input type="time" name="depttime" id="input_depttime" class="inputfields" required>
                    <br>
                    <label for="input_arvtime" style="font-size: x-large;">Arrival time:</label>
                    <input type="time" name="arvtime" id="input_arvtime" class="inputfields" required>
                    <br>
                    <input type="text" name="seats" id="input_seats" maxlength="3" pattern="[0-9]+" placeholder="Seats number (3 digits only)" class="inputfields" required> 
                    <br>
                    <input type="text" name="cost" id="cost" maxlength="4" pattern="[0-9]+" placeholder="cost of the ticket" class="inputfields" required> 
                    <br>
                    <input type="submit" name="addsubmit" value="Add Flight!" id="AddFlight" style="width: 100px; height: 30px; font-size: large; margin-top: 10px;"> 
                </fieldset>
            </form>
            <?php 
            if(isset($_POST["addsubmit"])){
              $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");
              $dept_t = explode(":",$_POST["depttime"]);
              $arv_t = explode(":",$_POST["arvtime"]);
              if(intval($dept_t[0]) >= 12){
                $_POST["depttime"] = strval(intval($dept_t[0])-12).":".$dept_t[1]." pm";
                if($_POST["depttime"] == "0:00 pm"){
                  $_POST["depttime"] = "12:00 pm";
                }
              }
              else{
                $_POST["depttime"] = $_POST["depttime"] +" am";
              }
              if(intval($arv_t[0]) > 12){
                $_POST["arvtime"] = strval(intval($arv_t[0])-12).":".$arv_t[1]." pm";
              }
              else{
                if($_POST["arvtime"] = "00:00"){
                  $_POST["arvtime"] = "12:00";
                }
                $_POST["arvtime"] = $_POST["arvtime"]." am";
              }

              $query = "INSERT INTO `flight` (`FLight_ID`, `From_country`, `To_country`, `Date`, `Departure_time`, `Arrival_time`, `Seats`, `Raw_cost`) VALUES ('".$_POST["flight_id"]."','".$_POST["from"]."','".$_POST["to"]."','".$_POST["date"]."','".$_POST["depttime"]."','".$_POST["arvtime"]."','".$_POST["seats"]."','".$_POST["cost"]."')";
              try{
                $result = $conn1->query($query);    
              }
              catch(exception $e){
                echo "<p style='color: red;'>Flight id entered seems to be already assigned to other flight</p>";
                $conn1->close();
                exit(); 
              }
              echo "<p>reload the page to see the result</p>";
            }
            if(isset($_POST["deleteflight"])){
              $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");
              $query = "DELETE FROM `flight` WHERE `FLight_ID` = ".$_POST["Flight_ID"];
              $result1 = $conn2->query($query);  
            }
            ?>
        </div>
    </body>
</html>