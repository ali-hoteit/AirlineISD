<?php
require('fpdf185/fpdf.php');

session_start();

$conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");

if ($_POST["status"] == "Purchased") {
        $insert_query = "INSERT INTO `ticket` (`Username`, `Flight_ID`, `Status`, `Cost`, `Max_luggage`, `Meal_type`, `Seat_location`) VALUES ('".$_SESSION["username"]."','".$_POST["flightID"]."','".$_POST["status"]."','".$_POST["total_cost"]."','".$_POST["Max_luggage"]."','".$_POST["Meal_type"]."','".$_POST["Seat_Location"].$_POST["Seat_Number"]."')";
        try{
                $insert_result = $conn->query($insert_query);    
        }
        catch(exception $e){
                echo "<h1>looks like either: <ul><li>you already booked a ticket for this flight</li><li>or you registered for it (go to <a href='MYflights.php'>MYflights</a> and check)</li><li>if you didnt reserved a seat or booked a flight, the seat you selected is taken by other passengers</li></ul></h1>";
                $conn->close();
                exit(); 
        }

        $update_q = $conn->query("UPDATE `flight` SET `Seats`= (SELECT `Seats` FROM `flight` WHERE `FLight_ID` = ".$_POST["flightID"].")-1 WHERE `FLight_ID` =".$_POST["flightID"]);

        $query = "SELECT * FROM `flight` WHERE `FLight_ID` = " . $_POST["flightID"];
        $queryuser = "SELECT * FROM `user` WHERE `Username` = '" . $_SESSION["username"]."'";
        $result = $conn->query($query);
        $resultuser = $conn->query($queryuser);
        $conn->close();
        $row = $result->fetch_assoc();
        $rowuser = $resultuser->fetch_assoc();

        include 'phpqrcode/qrlib.php';
        $qrcpde_info = $rowuser["First_Name"]."\n".$rowuser["Last_Name"]."\n".$rowuser["Phone_Number"]."\n".$_POST["flightID"]."\n".$row["From_country"]."\n".$row["To_country"]."\n".$row["Date"]."\n".$_POST["Seat_Location"].$_POST["Seat_Number"];
        $qr_codepng = "QRcodes\\".$_SESSION["username"]."_".$_POST["flightID"].".png";
        QRcode::png($qrcpde_info,$qr_codepng);

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 40);
        $pdf->Cell(45, 20, '', 0, 0, 'C');
        $pdf->Cell(100, 20, 'Hope ticket', 0, 0, 'C');
        $pdf->Cell(45, 20, '', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 20);
        $pdf->Cell(45, 20, 'Flight Information:', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 16);
        $pdf->Cell(45, 10, 'Flight ID', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $_POST["flightID"], 0, 1, 'L');
        $pdf->Cell(45, 10, 'From', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $row["From_country"], 0, 1, 'L');
        $pdf->Cell(45, 10, 'To', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $row["To_country"], 0, 1, 'L');
        $pdf->Cell(45, 10, 'Date ', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $row["Date"], 0, 1, 'L');
        $pdf->Cell(45, 10, 'Departure time', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $row["Departure_time"], 0, 1, 'L');
        $pdf->Cell(45, 10, 'Arrival time', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $row["Arrival_time"], 0, 1, 'L');
        $pdf->SetFont('Arial', '', 20);
        $pdf->Cell(65, 20, 'Boarding Information:', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 16);
        $pdf->Cell(55, 10, 'Meal Quality', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $_POST["Meal_type"], 0, 1, 'L');
        $pdf->Cell(55, 10, 'Seat Location', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $_POST["Seat_Location"] . $_POST["Seat_Number"], 0, 1, 'L');
        $pdf->Cell(55, 10, 'Max Luggage Weight', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $_POST["Max_luggage"]." kg", 0, 1, 'L');
        $pdf->Cell(45, 10, '', 0, 0, 'C');
        $pdf->Cell(100, 10, 'status: '.$_POST["status"], 0, 0, 'C');
        $pdf->Cell(45, 10, '', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 20);
        $pdf->Cell(65, 20, 'Personal Information:', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 16);
        $pdf->Cell(50, 10, 'First Name', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $rowuser["First_Name"], 0, 1, 'L');
        $pdf->Cell(50, 10, 'last Name', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $rowuser["Last_Name"], 0, 1, 'L');
        $pdf->Cell(50, 10, 'Email', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $rowuser["Email"], 0, 1, 'L');
        $pdf->Cell(50, 10, 'Phone Number', 0, 0, 'L');//
        $pdf->Cell(10, 10, '=>', 0, 0, 'L');
        $pdf->Cell(30, 10, $rowuser["Phone_Number"], 0, 1, 'L');
        $pdf->Image($qr_codepng,95,240);

        $pdf->Output('D','ticket.pdf');
}
else if ($_POST["status"] == "Reservation"){
        $insert_query = "INSERT INTO `ticket` (`Username`, `Flight_ID`, `Status`, `Cost`, `Max_luggage`, `Meal_type`, `Seat_location`) VALUES ('".$_SESSION["username"]."','".$_POST["flightID"]."','".$_POST["status"]."','".$_POST["total_cost"]."','".$_POST["Max_luggage"]."','".$_POST["Meal_type"]."','".$_POST["Seat_Location"].$_POST["Seat_Number"]."')";
        try{
                $insert_result = $conn->query($insert_query);    
        }
        catch(exception $e){
                echo "<h1>looks like either: <ul><li>you already booked a ticket for this flight</li><li>or you registered for it (go to <a href='MYflights.php'>MYflights</a> and check)</li><li>if you didnt reserved a seat or booked a flight, the seat you selected is taken by other passengers</li></ul></h1>";
                $conn->close();
                exit(); 
        }

        $query = "SELECT `Date` FROM `flight` WHERE `FLight_ID` = " . $_POST["flightID"];
        $update_q = $conn->query("UPDATE `flight` SET `Seats`= (SELECT `Seats` FROM `flight` WHERE `FLight_ID` = ".$_POST["flightID"].")-1 WHERE `FLight_ID` =".$_POST["flightID"]);
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $cur_date = explode("-",date("Y-m-d"));
        $flight_date = explode("-",$row["Date"]);
        if(intval($cur_date[2])+7 > 30){
                $cur_date[2] = strval((intval($cur_date[2]) + 7)%31 + 1);
                if(intval($cur_date[1])+1 > 12){
                        $cur_date[1] = strval(intval($cur_date[1]+1)%13 + 1);
                        $cur_date[0] = strval(intval($cur_date[0]+1));
                } 
        }
        else{
                $cur_date[2] = strval(intval($cur_date[2]) + 7);
        }
        $flight = implode("-",$cur_date);
        if(($flight_date[0] > $cur_date[0]) || ($flight_date[0] == $cur_date[0] && $cur_date[1] <= $flight_date[1] && $cur_date[3] < $flight_date[3])){
                echo "<h1>you have 7 days to confirm your reservation (till ".$flight.")</h1>";
                echo "<h1>Go back <a href='Flights.php'>Home</a></h1>";
        }
        else{
                echo "<h1>you can't register before less than 7 days</h1>";
                exit();
        }
}
?>