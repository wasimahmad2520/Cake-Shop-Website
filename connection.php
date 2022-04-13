<?php
//<!--========== PHP CONNECTION TO DATABASE ==========-->
    $host = "10.0.1.22";
    $username = "wasimahmad";
    $pass = "Wasimahmad$$%4";

    $dbname = "ecommerce";
    //create connection
    $conn = mysqli_connect($host, $username, $pass, $dbname);
    //check connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

?>
