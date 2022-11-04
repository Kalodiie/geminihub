<?php
    $mysqli = new mysqli("localhost","root","","geminihub");
    if($mysqli->error)
    {
        die("Doslo je do greske.");
    }
?>