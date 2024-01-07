<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/successful_account.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
        <title>account created</title>
        <link rel= "icon" href="../pics/sucess.png">
        <script src="../js/successful_account.js"></script>
    </head>
    <body>
            <div class="div1">
                <img src="../pics/created success.png"  id="like">
                
                <p>you can check our flights now!</p>
                <p>return <a href="Main.php" style="text-decoration: none;" id="changeDest">Home</a></p>
            </div>
        <img src="../pics/airplane_side.png" id="airplane" >
        <audio id = "airplane_audio" preload = "auto">
            <source src = "../pics/Airplane (2).mp3" type = "audio/mp3">
            Browser does not support audio tag</audio>
            <center>
                <?php
 
       
                $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");
                 
                if($conn === false){
                    die("ERROR: Could not connect. "
                        . mysqli_connect_error());
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $first_name =  $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $dob = $_POST['dob'];
                $phonenumber = $_POST['phonenumber'];
                $city = $_POST['city'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                $count=0;

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $passwordHash =  md5($password);
                    $passwordHash2 =  md5($password2);
                    if (strcmp($password, $password2) === 0){     
                    $sql = "INSERT INTO user  VALUES ('$username','$passwordHash','$first_name','$last_name','$email','$phonenumber','$city','$dob')";
                
                    if ($conn->query($sql) === TRUE) {
                        echo "<h3>data stored in a database successfully.";
                        exit;
                    }else{
                        echo "ERROR:  $sql. "
                            . mysqli_error($conn);
                    }  
                }
                
                $conn->close();

            }else {
                    echo PHP_EOL;
                       echo "The password is not correct";
                       echo PHP_EOL;
                   }
                   } else {
                      echo PHP_EOL;
                       echo "The email address is not valid and ";
                   }             
           
                ?>

            </center>
    </body>
</html>