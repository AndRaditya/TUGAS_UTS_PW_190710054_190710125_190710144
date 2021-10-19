<?php

    // $host = "localhost";
    // $user = "macresto_user";
    // $pass = "ia5703ZGnX(;xV";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "macresto_mac_resto";

    $con = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }

?>