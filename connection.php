<?php 
    $hostname = "localhost";
    $username = "trisno";
    $password = "";
    $db_name  = "absensi";

    $db = new mysqli($hostname, $username, $password, $db_name);

    if ($db->connect_error) {
        echo "connection error";
    }
?>