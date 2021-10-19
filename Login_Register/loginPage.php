<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: ../Beranda.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>MAC Resto - Login</title>
    <link rel="icon" href="../Images/restaurant (1).png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/style_login.css" />
</head>


<body class="text-center">
    <!-- navbar lama -->
    <!-- <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button"
            style="height: 80px; color: #ffffff; background: #ff7d00">
            <div class="container-fluid">
                <a class="navbar-brand" href="../TampilanAwal/tampilanAwal.php">
                    <img src="../Images/restaurant (1).png" width="50px" height="50xp" />&nbsp;MAC
                    Resto
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                </div>
            </div>
        </nav>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-4 mb-5 bg-white navbaredit">
        <div class="container-fluid">
            <div class="col-md-8">
                <a href="../TampilanAwal/tampilanAwal.php" style="text-decoration: none;">
                    <img src="../Images/restaurant (1).png" style="width: 64px; height:64px; margin-right: 24px;"
                        align="left">
                    <h2 style="color: black; margin-top: 12px;" align="left"><small>MAC Resto</small></h2>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section class="login-clean" style="margin-top: 68px; margin-bottom: -60px;background-color: #ffffff;">
        <!-- LOGIN FORM -->
        <div data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0" style="background-color: #ffffff;">
            <form action="../process/loginProcess.php" method="post"
                style="width: 400px; min-width: 100px; max-width: 400px; height: 600px; max-height: 600px; min-height: 100px; padding: 60px;box-shadow: 2px 2px 10px 10px #BABABA;">
                <h1 style="font-family: Anton, sans-serif">Login</h1>
                <div class="illustration">
                    <img src="../Images/login.jpeg" style="width: 150px" />
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" id="username" name="username" placeholder="Username"
                        required="" />
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" id="password" name="password" placeholder="Password"
                        required="" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-block w-100" type="submit" style="background: #ff7d00"
                        name="login">
                        Log In
                    </button>
                </div>
                <div class="d-block float-none">
                    <span class="d-table-cell" style="font-size: 12px">Belum punya akun? </span>
                    <a class="text-start d-table-cell forgot" href="./registerPage.php"
                        style="width: 111px; color: var(--bs-blue)">
                        <span style="text-decoration: underline; margin: 4px"> Daftar Disini!</span>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <div data-aos="fade-in-up" data-aos-offset="0">
        <footer>
            <div class="container-fluid" style="background-color: #C44C06; height: 150px;">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>