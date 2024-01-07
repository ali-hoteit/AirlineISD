<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
        <script src="../js/Flight_Info.js"></script>
        <title>Flight Booking</title>
        <style>
            *{
            font-family: 'Oswald';
            }
        </style>
    </head>
    <body>
        <?php
        session_start();

        if(isset($_POST["submitt"])){
            $F_ID = $_POST["Flight_ID"];
            $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");
            $query = "SELECT * FROM `flight` WHERE `FLight_ID` = ".$F_ID;
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $result->data_seek(0);
                while ( $row = $result->fetch_assoc() )
                {
                    echo "<h3> <u>Flight ID:</u> ".$row["FLight_ID"]."</h3>";
                    echo "<h3> <u>Departure Country:</u> ".$row["From_country"]."</h3>";
                    echo "<h3> <u>Arrival Country:</u> ".$row["To_country"]."</h3>";
                    echo "<h3> <u>Date:</u> ".$row["Date"]."</h3>";
                    echo "<h3> <u>Departure time:</u> ".$row["Departure_time"]."</h3>";
                    echo "<h3> <u>Arrival time:</u> ".$row["Arrival_time"]."</h3>";

                    echo "<h2 style='color: red'>To Book this Flight fill the informartion below:</h2>";
                    echo "<h2>TICKET: </h2>";
                    echo "<h2>Username: ".$_SESSION["username"]."</h2>";
                    echo "<h2>Flight: ".$row["FLight_ID"]."</h2>";
                    echo "<h2>Cost: <span id='raw_cost'>".$row["Raw_cost"]."</span>$</h2>";
                    echo "<h2>ATTENTION! any changes in the section below will add extra charge</h2>";
                }
            }
        }
        ?>
        <form action="confirm_ticket.php" method="post">
            <?php echo "<h3> <u>Flight ID:</u> ".$F_ID."</h3>"; 
                  echo "<input type='hidden' name='flightID' value='".$F_ID."'>" ?>
            <label for="1">Meal Type: </label>
            <select name="Meal_type" id="1" required>
                <option value="" selected></option>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select>
            <br><br>
            <label for="2" style="float: left; margin-top: 100px;">Seat Location: </label>
            <select name="Seat_Location" id="2" style="float: left; margin-top: 100px;" required>
                <option value="" selected></option>
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
                <option value="d">d</option>
                <option value="e">e</option>
                <option value="f">f</option>
                <option value="g">g</option>
                <option value="h">h</option>
                <option value="i">i</option>
                <option value="j">j</option>
                <option value="k">k</option>
                <option value="l">l</option>
                <option value="m">m</option>
                <option value="n">n</option>
                <option value="o">o</option>
                <option value="p">p</option>
                <option value="q">q</option>
                <option value="r">r</option>
                <option value="s">s</option>
                <option value="t">t</option>
                <option value="u">u</option>
                <option value="v">v</option>
                <option value="w">w</option>
                <option value="x">x</option>
                <option value="y">y</option>
                <option value="z">z</option>
            </select>
            <select name="Seat_Number" id="3" style="float: left; margin-top: 100px;" required>
                <option value="" selected></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <img src="../pics/airplane top view.png" style="float: left; width: 250px; height: 250px;">
            <br style="clear: left;">
            <label for="luggage" style="float: left;">Max luggage weight:</label>
            <input type="range" id="luggage" name="Max_luggage" min="50" max="100" style="float: left;" value="50">
            <p id="display_number" style="float: left; margin-top: 0px;">50 kg</p>
            <p style="clear: left;">-------------------------------------------------------------------------------------------------------</p>
            <h3>changes:</h3>
            <div>
                <p id="meal change">no additional fees on meal</p>
                <p id="seat change">no additional fees on seat location</p>
                <p id="luggage change">no additional fees on luggage weight</p>
                <h2 id="total_cost"></h2>
                <input type="hidden" value="" name="total_cost" id="send_cost">
            </div>
            <label for="stat">Ticket Status:</label>
            <select name="status" id="stat" required>
                <option value="" selected></option>
                <option value="Reservation">Reserve a seat</option>
                <option value="Purchased">Purchase</option>
            </select>
            <br><br>
            <label for="pin" style="float: left;">visa PIN:</label>
            <input type="text" name="visa_pin" maxlength="3" id="pin" pattern="[0-9]{3}" style="float: left;" required disabled>
            <p style="float: left; margin-top: 5px;"><sub>(3 digits usually found at the back of the visa card)</sub></p>
            <br style="clear: left;"><br>
            <input type="submit" value="Buy Ticket!" style="width: 100px; height: 35px; font-size: large;">
        </form>
        <a href="Flights.php"><button>Back to Flights</button></a>
    </body>
</html>