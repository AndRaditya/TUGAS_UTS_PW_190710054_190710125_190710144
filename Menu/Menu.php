<?php
    session_start();
    if (!$_SESSION['isLogin']) {
        header("location: ../Login_Register/loginPage.php");
    }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styleBerandaMenu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <title>MAC Resto - Menu</title>
    <link rel="icon" href="../Images/restaurant (1).png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-4 mb-5 bg-white navbaredit">
        <div class="container-fluid">
            <div class="col-md-8">
                <a href="../Beranda.php" style="text-decoration: none;">
                    <img src="../Images/restaurant (1).png" style="width: 64px; height:64px; margin-right: 24px;"
                        align="left">
                    <h2 style="color: black; margin-top: 12px;"><small>MAC Resto</small></h2>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin: 0 0 0 auto;">
                    <li class="nav-item ">
                        <a class="nav-link" href="../Beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item active a">
                        <a class="nav-link" href="../Menu/Menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Profile/ProfilePage.php">Profil</a>
                    </li>
                    <li class="nav-item" style="margin-left: 16px">
                        <a class="nav-link" href="../process/logoutProcess.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div data-aos="zoom-in" data-aos-offset="0">
                    <div class="col-lg-12">
                        <div class="heading-title text-center titlemenuedit">
                            <h1>MENU</h1>
                            <p>Pilihan menu yang tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="d-flex align-items-start">
                <div data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0">
                    <div class="nav flex-column nav-pills me-2" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-semua-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-semua" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Semua</button>
                        <button class="nav-link" id="v-pills-makanan-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-makanan" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Makanan</button>
                        <button class="nav-link" id="v-pills-minuman-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-minuman" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false" style="margin-bottom: 16px">Minuman</button>
                        <!-- <a href="listPesananPage.php">
                        <button class="nav-link" id="v-pills-pesan-tab"  data-bs-toggle="pill"
                        type="button" role="tab"  aria-controls="v-pills-settings" href="listPesananPage.php" 
                        aria-selected="false">Pesan</button>
                    </a> -->
                        <hr>
                        <a href="../Menu/listPesananPage.php" id="btn_passingListPesanan">
                            <button class="btn btn-light" style="background-color: #d17a49; 
                            color:white; outline-color: #d17a49; width: 140px; height: 40px;">
                                Pesan Disini
                            </button>
                        </a>
                    </div>
                </div>


                <div class="col-11">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-semua" role="tabpanel"
                            aria-labelledby="v-pills-semua-tab">
                            <div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 special-grid makanan">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
                                            <img src="../Images/nasi_goreng.jpeg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Nasi Goreng</h4>
                                                <h5>Rp 17.500</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid makanan">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="600" data-aos-offset="0">
                                            <img src="../Images/mie_goreng.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Mie Goreng</h4>
                                                <h5>Rp 16.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid makanan">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="800" data-aos-offset="0">
                                            <img src="../Images/mie_kuah.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Mie Kuah</h4>
                                                <h5>Rp 14.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid makanan">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
                                            <img src="../Images/bubur_ayam.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Bubur Ayam</h4>
                                                <h5>Rp 12.500</h5>
                                            </div>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid makanan">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="600" data-aos-offset="0">
                                            <img src="../Images/ayam_goreng.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Ayam Goreng</h4>
                                                <h5>Rp 15.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid makanan">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="800" data-aos-offset="0">
                                            <img src="../Images/ayam_bakar.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Ayam Bakar</h4>
                                                <h5>Rp 15.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid minuman">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0">
                                            <img src="../Images/air_mineral.jpeg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Air Mineral</h4>
                                                <h5>Rp 3.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid minuman">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="600" data-aos-offset="0">
                                            <img src="../Images/esteh_manis.jpeg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Es Teh Manis</h4>
                                                <h5>Rp 5.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid minuman">
                                        <div class="gallery-single fix" data-aos="zoom-in" data-aos-delay="800" data-aos-offset="0">
                                            <img src="../Images/es_teler.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Es Teler</h4>
                                                <h5>Rp 10.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-makanan" role="tabpanel"
                            aria-labelledby="v-pills-makanan-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 special-grid makanan">
                                    <div class="gallery-single fix">
                                        <img src="../Images/nasi_goreng.jpeg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <br>
                                            <h4>Nasi Goreng</h4>
                                            <h5>Rp 17.500</h5>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid makanan">
                                    <div class="gallery-single fix">
                                        <img src="../Images/mie_goreng.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <br>
                                            <h4>Mie Goreng</h4>
                                            <h5>Rp 16.000</h5>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid makanan">
                                    <div class="gallery-single fix">
                                        <img src="../Images/mie_kuah.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <br>
                                            <h4>Mie Kuah</h4>
                                            <h5>Rp 14.000</h5>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid makanan">
                                    <div class="gallery-single fix">
                                        <img src="../Images/bubur_ayam.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <br>
                                            <h4>Bubur Ayam</h4>
                                            <h5>Rp 12.500</h5>
                                        </div>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid makanan">
                                    <div class="gallery-single fix">
                                        <img src="../Images/ayam_goreng.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <br>
                                            <h4>Ayam Goreng</h4>
                                            <h5>Rp 15.000</h5>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 special-grid makanan">
                                    <div class="gallery-single fix">
                                        <img src="../Images/ayam_bakar.jpg" class="img-fluid" alt="Image">
                                        <div class="why-text">
                                            <br>
                                            <h4>Ayam Bakar</h4>
                                            <h5>Rp 15.000</h5>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-minuman" role="tabpanel"
                            aria-labelledby="v-pills-minuman-tab">
                            <div data-aos="zoom-in-up" data-aos-delay="800" data-aos-offset="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 special-grid minuman">
                                        <div class="gallery-single fix">
                                            <img src="../Images/air_mineral.jpeg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Air Mineral</h4>
                                                <h5>Rp 3.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid minuman">
                                        <div class="gallery-single fix">
                                            <img src="../Images/esteh_manis.jpeg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Es Teh Manis</h4>
                                                <h5>Rp 5.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 special-grid minuman">
                                        <div class="gallery-single fix">
                                            <img src="../Images/es_teler.jpg" class="img-fluid" alt="Image">
                                            <div class="why-text">
                                                <br>
                                                <h4>Es Teler</h4>
                                                <h5>Rp 10.000</h5>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Optional JavaScript
             jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>