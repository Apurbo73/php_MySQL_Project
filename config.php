<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "Amigos";

    $conn = mysqli_connect($serverName, $userName, $password, $dbname);
    if(!$conn){
        die("connection failed: " . mysqli_connect_error());
    }
    else{
        // echo "<script>alert('Connected Successful')</script>";
    }

?>