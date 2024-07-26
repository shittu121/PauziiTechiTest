<?php

 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "pauzii_tech";
 $conn = new mysqli($host, $username, $password, $database);

 if(!$conn)

 {
    die("Connection Failed:". mysqli_connect_error());
 }


?>