<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "connection.php";
        
    ?>
    <h1>Welcome to signup page</h1>
    <form action="signup_form.php" method="post">
        <table>    
            <tr><td><legend>Username</legend><input type="text" name="user" id=""></td></tr>
            <tr><td><legend>Password</legend><input type="password" name="sifra" id=""></td></tr>
            <tr><td><button name="klik" type="submit">SIGN UP</button></td></tr>
        </table>
    </form>
    <?php
        
        if(isset($_POST["klik"])){
            $user = $_POST["user"];
            $pass = $_POST["sifra"];

            $upit = "insert into userinfo (username,password) values ('$user','$pass')";
            if(!$rez=$mysqli->query($upit))
            {
                die("GRESKA!");
            }
         header("Location: finish.html");
         

        }

    ?>
</body>
</html>