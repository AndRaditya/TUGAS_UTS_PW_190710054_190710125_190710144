<?php

    $host = "localhost";
    $user = "macresto_user";
    $pass = "ia5703ZGnX(;xV";
    $name = "macresto_mac_resto";
    // $host = "localhost";
    // $user = "root";
    // $pass = "";
    

    $con = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }

?>