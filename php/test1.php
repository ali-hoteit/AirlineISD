<?php

use MongoDB\Operation\Find;

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$database = $client->Airline_Reservation;



$flight_collection = $client->Airline_Reservation->Flights;

$customer_collection = $client->Airline_Reservation->Customers;



if (isset($_POST["addFlight"])) {

    $flight_id = (int)$_POST['Flight_ID'];
    $admin_id = $_POST['Admin_Username'];
    $from = $_POST['From'];
    $to = $_POST['To'];
    $departure_date = $_POST['Departure_Date'];
    $departure_time = $_POST['Departure_Time'];
    $economy_seats = (int)$_POST['Economy_Seats_Left'];
    $business_seats = (int)$_POST['Business_Seats_Left'];
    $firstclass_seats = (int)$_POST['FirstClass_Seats_Left'];
    $delay = $_POST['delay'];
    $captain_name = $_POST['Captain_Name'];

    $flag = 0;


    // FLIGHT IS UNIQUE, WE CANNOT ALLOW 2 FLIGHTS TO HAVE THE SAME ONE!
    $flightResult = $flight_collection->find(['Flight_ID' => $flight_id]);

    foreach ($flightResult as $searchFor) {
        $storedFlight = $searchFor['Flight_ID'];
        if ($flight_id == $storedFlight) {
            $flag = 1;
        }
    }

    if ($flag == 1) {
        print("<script>window.alert('Flight already exists! Please choose another Flight ID!');
        window.reload();
        </script>");
        die();
    }




    $flight_collection = $client->Airline_Reservation->Flights;

    $newFlights = [
        [
            'Flight_ID' => $flight_id,
            'Admin_Username' => $admin_id,
            'From' => $from,
            'To' => $to,
            'Departure_Date' => $departure_date,
            'Departure_Time' => $departure_time,
            'Economy_Seats_Left' => $economy_seats,
            'Business_Seats_Left' => $business_seats,
            'FirstClass_Seats_Left' => $firstclass_seats,
            'Delay' => $delay,
            'Captain_Name' => $captain_name
        ],
    ];

    $insertManyResult = $flight_collection->insertMany($newFlights);


    print("<script>window.alert('Successfuly added $flight_id in the database!')</script>");
    echo "<script> window.location.assign('admin.html'); </script>";
}
?>