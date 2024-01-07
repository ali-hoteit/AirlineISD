<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
        <title>Login Page</title>
        <link rel= "icon" href="../pics/login logo.png">
    </head>
    <body>
        <?php session_start(); ?>
        <h1 style="margin-top: 11%;">Welcome again &#128512; &#128075;</h1>
        <form method="post" action="Login.php">
            <div class="repos">
                <center><label for="username" style="margin-right: 35px;">Username&#9992; :</label></center>
                <center><input type="text" name="username" class="user_pass" maxlength="25" id="Username" placeholder="Your username" required style="font-size: xx-large;"></center>
                <br>
                <center><label for="password" style="margin-right: 43px;">Password&#9992; :</label></center>
                <center><input type="password" name="password" class="user_pass" id="Pass" placeholder="********" required style="font-size: xx-large;"></center>
                <br style="font-size: medium;">
                <input type="submit" name="submit" style="font-size: 70%; margin-left: 155px;" value="Login">
                <?php
                if(isset($_POST["submit"])){
                    if($_POST["username"] == "HopeAdmin" && $_POST["password"] == "@#Hope#@123"){
                        $_SESSION["username"] = "Admin";
                        header("Location: http://127.0.0.1/airline%20(3)/php/Main.php");
                        exit();
                    }
                    $conn = mysqli_connect("localhost", "id21747109_alja", "AirlineAJ1@", "id21747109_alijaafar");
                    $query = "SELECT `Username`, `Password` FROM `user` WHERE `Username` = '".$_POST["username"]."'";
                    $result = $conn->query($query);
                    if(mysqli_num_rows($result) == 0){
                        echo "<center><p style='font-size: 20px;'>username or password invalid!</p></center>";
                    }
                    else {
                        $conn->close();
                        $row = $result->fetch_assoc();
                        if (hash("md5", $_POST["password"]) != $row["Password"]) {
                            echo "<center><p style='font-size: 20px;'>username or password invalid!</p></center>";
                        }
                        else{
                            $_SESSION["username"] = $row["Username"];
                            header("Location: http://127.0.0.1/airline%20(3)/php/Main.php");
                        }
                    }
                }
                ?>
                <center><p style="font-size: large; margin-left: 10px;">If you don't have an account, <br> please sign in <a href="register.php" class="italics">here</a></p></center>
            </div>
        </form>
    </body>
</html>