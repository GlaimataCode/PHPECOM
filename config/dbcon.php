<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpecom";

    //kria database koneksaun
    $conn = mysqli_connect($host, $username, $password, $dbname);

    //check koneksaun
    if(!$conn){
        die("Koneksaun Failla: ". mysqli_connect_error());
    }
?>