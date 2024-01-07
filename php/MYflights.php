<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <title>MY flights page</title>
    <style>
        *{
            font-family: 'Oswald';
        }
        #Cbut{
            height: 35px;
            width: 65px;
            font-size: 20px;
        }
        #_box{
            background-color: #2ecc71;
            width: 400px;
            height: 50px;
            border: 1px solid black;
            border-radius: 40px;
            text-align: center;
        }
        #table1{
            background-color: #2ecc71;
            border: 1px solid black;
            border-radius: 40px;    
        }
        table{
    border-collapse: collapse;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    width: 99%;
    text-align: center;
    font-size: x-large;
    margin-top: -25px;
    margin-left: 5px;
}

thead tr {
    background-color: #3296d8;
    color: #ffffff;
    text-align: center;
}

thead tr th{
    border: 1px solid black;
}

tbody tr {
    text-align: center;
    height: 60px;
    font-size: xx-large;
}

tbody tr td{
    border-left: 1px dashed black;
    border-right: 1px dashed black;
}

tbody tr:nth-of-type(even) {
    background-color: #e4e4e4;
}

tbody tr:nth-of-type(odd) {
    background-color: white;
}
        body{
            background-color: #85FFBD;
            background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 75%);
        }
    </style>
</head>
<body>
    <?php

    session_start();
    $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");

    if(isset($_POST["submit"])){
        $update_seat = "DELETE FROM `ticket` WHERE `Flight_ID` = ".$_POST["ID"];
        $seat_result = $conn->query($update_seat);
        $update_s = $conn->query("UPDATE `flight` SET `Seats`= (SELECT `Seats` FROM `flight` WHERE `FLight_ID` = ".$_POST["ID"].")+1 WHERE `FLight_ID` =".$_POST["ID"]);
    }

    $query_reserve = "SELECT * FROM `flight` WHERE `Flight_ID` IN (SELECT `Flight_ID` FROM `ticket` WHERE `Username` = '".$_SESSION["username"]."' AND `Status` = 'Reservation')";
    $query_purchase = "SELECT * FROM `flight` WHERE `Flight_ID` IN (SELECT `Flight_ID` FROM `ticket` WHERE `Username` = '".$_SESSION["username"]."' AND `Status` = 'Purchased')";
    $reserve_result = $conn->query($query_reserve);
    $purchase_result = $conn->query($query_purchase);
    ?>

    <div id="_box">
        <?php
        echo "<p style='font-size: xx-large; margin-top: 0px;'>Username: ".$_SESSION["username"]."</p>";
        ?>
    </div>
    <br>
    <div id="table1">
        <p style="font-size: xx-large; margin-left: 15px; margin-top: 5px;">Reserved Flights:</p>
        <table id="table">
            <thead>
                <tr id="tablehead">
                    <th>Flight ID &#9992;</th>
                    <th>From <sub style="font-size: 20px;">(country)</sub>&#127758;</th>
                    <th>To  <sub style="font-size: 20px;">(country)</sub>&#127758;</th>
                    <th>Year-Month-Day &#128197;</th>
                    <th>Departure Time &#128348;</th>
                    <th>Arrival Time &#128344;</th>
                    <th>Cancel &#10060;</th>
                </tr>
            </thead>
            <tbody id="tablebody">
                <?php
                 if ($reserve_result->num_rows > 0) {
                    $reserve_result->data_seek(0);
                    while ( $row = $reserve_result->fetch_assoc() )
                    {
                        echo "<tr><td>".$row["FLight_ID"]."</td><td>".$row["From_country"]."</td><td>".$row["To_country"]."</td><td>".$row["Date"]."</td><td>".$row["Departure_time"]."</td><td>".$row["Arrival_time"]."</td>";
                        echo "<td><form action='../php/MYflights.php' method='post'><input type='hidden' value='".$row["FLight_ID"]."' name='ID'><input type='submit' value='Cancel' name='submit' id='Cbut'></form></td></tr>";
                    }
                 }
                ?>
            </tbody>   
        </table>
        <br>
    </div>
    <br>
    <div id="table1">
        <p style="font-size: xx-large; margin-left: 15px; margin-top: 5px;">Booked Flights:</p>
        <table id="table">
            <thead>
                <tr id="tablehead">
                    <th>Flight ID &#9992;</th>
                    <th>From <sub style="font-size: 20px;">(country)</sub>&#127758;</th>
                    <th>To  <sub style="font-size: 20px;">(country)</sub>&#127758;</th>
                    <th>Year-Month-Day &#128197;</th>
                    <th>Departure Time &#128348;</th>
                    <th>Arrival Time &#128344;</th>
                    <th>Cancel &#10060;</th>
                </tr>
            </thead>
            <tbody id="tablebody">
            <?php
                 if ($purchase_result->num_rows > 0) {
                    $purchase_result->data_seek(0);
                    while ( $row = $purchase_result->fetch_assoc() )
                    {
                        echo "<tr><td>".$row["FLight_ID"]."</td><td>".$row["From_country"]."</td><td>".$row["To_country"]."</td><td>".$row["Date"]."</td><td>".$row["Departure_time"]."</td><td>".$row["Arrival_time"]."</td>";
                        echo "<td><form action='../php/MYflights.php' method='post'><input type='hidden' value='".$row["FLight_ID"]."' name='ID'><input type='submit' value='Cancel' name='submit' id='Cbut'></form></td></tr>";
                    }
                 }
                ?>
            </tbody>  
        </table>
        <br>
    </div>
    <br>
    <button style="height: 50px; width: 50px; background-color: aqua; border-radius: 100%; font-size: 35px;" onclick="window.location.href='Main.php'"><</button>
</body>
</html>