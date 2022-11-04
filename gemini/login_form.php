<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php
        include "connection.php";    
    ?>
    <h1>Welcome to login page</h1>
    <form action="login_form.php" method="post">
        <table>    
            <tr><td><legend>Username</legend><input type="text" name="user" id=""></td></tr>
            <tr><td><legend>Password</legend><input type="password" name="sifra" id=""></td></tr>
            <tr><td><button name="klik" type="submit">LOG IN</button></td></tr>
        </table>
    </form>
    <?php
        
        if(isset($_POST["klik"])){
            
            $user = $_POST["user"];
            $pass = $_POST["sifra"];
            $upit = "select * from userinfo where username='$user' and password='$pass'";
            $sql = $mysqli->query($upit);
            $num = mysqli_num_rows($sql);

            if($num>0){

                header("Location: finish.html");
            }
            else{
                echo '<h3 style="color:red">Wrong username or password. Try again!</h3>';
            }

        }

    ?>
</body>
</html>