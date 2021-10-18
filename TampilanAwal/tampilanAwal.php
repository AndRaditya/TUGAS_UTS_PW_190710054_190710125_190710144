<?php
    // session_start();
    // if (!$_SESSION['isLogin']) {
    //     header("location: ../Beranda.php");
    // }else{
    //     header("location: ../TampilanAwal/tampilanAwal.php");
    // }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/tampilanAwal.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <title>MAC Resto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-4 mb-5 bg-white navbaredit">
        <div class="container-fluid">
            <div class="col-md-8">
                <img src="../Images/restaurant (1).png" style="width: 64px; height:64px; margin-right: 24px;"
                    align="left">
                <h2 style="color: black; margin-top: 12px;"><small>MAC Resto</small></h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin: 0 0 0 auto;">
                    <li class="nav-item masuk">
                        <a class="nav-link" href="../Login_Register/loginPage.php">Masuk</a>
                    </li>
                    <li class="nav-item daftar">
                        <a class="nav-link" href="../Login_Register/registerPage.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide carouseledit" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner carouseledit img">
            <div class="carousel-item active">
                <img src="../Images/homeslide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block captionedit">
                    <h1><strong>Selamat Datang!</strong></h1>
                    <p>Selamat menikmati menu di MAC Resto!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Images/homeslide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block captionedit">
                    <h1><strong>Selamat Datang!</strong></h1>
                    <p>Selamat menikmati menu di MAC Resto!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Images/homeslide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block captionedit">
                    <h1><strong>Selamat Datang!</strong></h1>
                    <p>Selamat menikmati menu di MAC Resto!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0">
        <div align="center">
            <div class="col-xxl-7" id="body-profile">
                <div class="container" style="margin-bottom: 48px; margin-top: 4px" id="awalanProfile">
                    <div data-aos="zoom-in" data-aos-delay="500" data-aos-offset="0">
                        <h2 class="header" align="center" style="padding-top: 14px">About Us</h2>
                        <div class="row" style="margin-top: 32px; padding-bottom: 34px;" align="center">
                            <div class="col-md-6 justify-content-md-center" id="aboutUs" align="center"
                                style="padding-left: 24px">
                                <div style="font-size: 18px; padding-top: 18px">
                                    MAC Resto didirikan oleh 3 mahasiswa Universitas Atma Jaya yang sering makan di
                                    warmindo
                                    bernama
                                    Mang Lili.
                                </div>
                                <div></div>
                                <div style="font-size: 18px; padding-top: 8px">
                                    Kata MAC sendiri diambil dari teman yang hampir setiap pagi pergi ke suatu fastfood
                                    di
                                    daerahnya,
                                    sehingga kami memutuskan untuk menggunakan nama tersebut.
                                </div>

                            </div>
                            <div class="col-md-4" id="aboutUs">
                                <div>
                                    <img src="../Images/img-01.jpg" style="width: 400px; height: 250px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-aos="zoom-in-up" data-aos-offset="0">
        <footer>
            <div class="container-fluid" style="background-color: #C44C06; margin-top: 60px; height: 150px;">
                <div class="container-lg" style="height: 100%;">
                    <div class="row" style="padding-top: 32px;">
                        <div class="col-lg-12" align="center">
                            <p class="d-flex justify-content-center" align="center" style="color: white;">&copy; MAC
                                Resto
                            </p>
                            <div style="color: white; font-size: 14px; font-family: 'Segoe UI';">
                                Made with Sweat and Blood.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Optional JavaScript
             jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- <script src="../js/tampilanAwal.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>