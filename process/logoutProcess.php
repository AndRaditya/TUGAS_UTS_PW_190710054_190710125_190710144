<?php
    ob_start();
    session_start();
    session_destroy();
    header("location: ../Login_Register/loginPage.php");

?>