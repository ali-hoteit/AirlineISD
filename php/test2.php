<html>
    <body>
        <form action="test2.php" method="post">
            <input type="text" name="password" value="1">
            <input type="submit" name="submit">
            <input type="submit" name="submitt">
        </form>
        <?php
        $hashed = hash("md5", "PaSsWoRd");
        if (isset($_POST["submit"])) {
            if(hash("md5", $_POST["password"]) == $hashed){
                echo "<p> valid </p>";
                $send_mail = mail("person5use5@gmail.com", "airport ticket", "<p>your password is valid</p>", "From: hopeairport0@gmail.com \nContent-type: text/html");
                if($send_mail == true){
                    echo "<h1>email sent</h1>";
                }
            }
            else{
                echo "<p> invalid </p>";
            }
        }
        if (isset($_POST["submitt"])) {
            echo "second";
        }
        ?>
    </body>
</html>
