<?php

    $server ="localhost";
    $username ="root";
    $password = "";
    $db ="db_pemweb";

    $conn = mysqli_connect("localhost", "root", "", "db_pemweb");
    if (!$conn){
        die("Connection Failed:" . mysqli_connect_error());
    }
?>