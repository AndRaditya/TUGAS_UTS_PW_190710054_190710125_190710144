<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="
        sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/navbar.css">
    <title>MAC - Resto</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-4 mb-5 bg-white navbaredit">
        <div class="container-fluid">
            <div class="col-md-8">
                <a href="../Beranda.html" style="text-decoration: none;">
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
                    <li class="nav-item">
                        <a class="nav-link" href="../Beranda.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Menu/Menu.html">Menu</a>
                    </li>
                    <li class="nav-item active a">
                        <a class="nav-link" href="../Profile/Profile.html">Profil</a>
                    </li>
                    <li class="nav-item masuk">
                        <a class="nav-link" href="../Login_Register/login.html">Masuk</a>
                    </li>
                    <li class="nav-item daftar">
                        <a class="nav-link" href="../Login_Register/register.html">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg">
        <div class="container min-vh-100 d-flex align-items-center">
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
                        <img src="Images/homeslide1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block captionedit">
                            <h1><strong>Selamat Datang!</strong></h1>
                            <p>Selamat menikmati menu di MAC Resto!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/homeslide2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block captionedit">
                            <h1><strong>Selamat Datang!</strong></h1>
                            <p>Selamat menikmati menu di MAC Resto!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/homeslide3.jpg" class="d-block w-100" alt="...">
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
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>