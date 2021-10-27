<?php
    // session_start();
    // header("location: ../Menu/listPesananPage.php");

    echo '
 

    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/sidebar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
        <title>MAC Resto - Pesanan</title>
        <link rel="icon" href="../Images/restaurant (1).png">
        <style>
            *{
                font-family: "Quicksand", sans-serif;
            }

            .side-bar {
                width: 260px;
                background-color: #d65106;
                min-height: 100vh;
            }

            a {
                padding-left: 10px;

                font-size: 13px;
                text-decoration: none;
                color: white;
            }

            a:hover {
                color: black;
            }

            .menu i {
                padding-left: 20px;
            }

            .menu .content-menu {
                padding: 9px 7px;
            }

            .menu .content-menu:hover{
                color: #d65106;
                background-color: #e3c9ba;
            }

            .isActive {
                background-color: #edc0a6 !important;
                border-right: 8px solid #e3c9ba;
            }

            i{
                color: #ffffff;
            }

        </style>
    </head>

    <body>
        <aside >
            <div class="d-flex">
                <div class="side-bar">
                    <a href="../Beranda.php" style="text-decoration: none;">
                            <h2 class="text-light text-center pt-2">MAC Resto</h2>
                    </a>
                    <hr>
                    <div class="menu">
                        <div class="content-menu " >
                            <i class="fa fa-list-alt"></i>
                            <a href="../Menu/listPesananPage.php" style="font-weight:600">Daftar Pesanan</a>
                        </div>
                        <div class="content-menu " >
                            <i class="fa fa-plus-square-o"></i>
                            <a href="../Menu/addPesananPage.php" style="font-weight:600">Tambah Pesanan</a>
                        </div>
                        <div class="content-menu " >
                            <i class="fa fa-cutlery"></i>
                            <a href="../Menu/Menu.php" style="font-weight:600">Kembali ke Menu</a>
                        </div>
                    <hr>
                </div>
            </div>
    </body>
'
?>