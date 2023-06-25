<?php
    $servername = "loopback:3307";
    $username = "root";
    $password = "rootpass";
    $basename = "pwaprojekt";

    $dbc = mysqli_connect($servername, $username, $password, $basename) or 
    die('Error connecting to MySQL server.'. mysqli_error($dbc));
    
    mysqli_set_charset($dbc, "utf8");
?>