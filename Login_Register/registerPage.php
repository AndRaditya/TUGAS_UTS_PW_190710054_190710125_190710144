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
    <title>MAC Resto - Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_register.css" />
</head>

<body class="text-center">
    <!-- <div>
        <nav class="
          navbar navbar-light navbar-expand-md
          sticky-top
          navigation-clean-button" style="height: 80px; color: #ffffff; background: #ff7d00">
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

    <section class="login-clean" style="
        width: 100%; margin-top: -48px; margin-bottom: -60px; height: 100%;">
        <!-- REGISTER FORM -->
        <div data-aos="zoom-in" data-aos-delay="300" data-aos-offset="0">
            <h1 style="margin-bottom: 40px; font-family: Anton, sans-serif">
                Daftar Sekarang
            </h1>
            <div data-aos="zoom-in" data-aos-delay="600" data-aos-offset="0">
                <form action="../process/registerProcess.php" method="post" style="width: 500px; min-width: 100px; max-width: 500px;
            height: fit-content;padding: 50px; padding-top: 10px;  ">
                    <img src="../Images/register.png" style="width: 130px; height: 130px; margin-bottom: 25px" />
                    <div class="mb-3">
                        <p class="text-start" style="margin-bottom: 5px; padding-left: 10px">
                            <strong>Nama Lengkap</strong>
                        </p>
                        <input class="form-control" type="text" id="name" name="name" required="" />
                    </div>

                    <div class="mb-3">
                        <p class="text-start" style="margin-bottom: 5px; padding-left: 10px">
                            <strong>Email</strong>
                        </p>
                        <input class="form-control" type="email" id="email" name="email" required />
                    </div>

                    <div class="mb-3">
                        <p class="text-start" style="margin-bottom: 5px; padding-left: 10px">
                            <strong>Nomor Telepon</strong>
                        </p>
                        <input class="form-control" type="text" id="nomor_telepon" name="nomor_telepon" required="" />
                    </div>

                    <div class="mb-3">
                        <p class="text-start" style="margin-bottom: 5px; padding-left: 10px">
                            <strong>Username</strong>
                        </p>
                        <input class="form-control" type="text" id="username" name="username" required="" />
                    </div>
                    <div class="mb-3">
                        <p class="text-start" style="margin-bottom: 5px; padding-left: 10px">
                            <strong>Password</strong>
                        </p>
                        <input class="form-control" type="password" id="password" name="password" required="" />
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary d-block w-100" type="submit" style="background: #ff7d00"
                            name="register">
                            Daftar
                        </button>
                    </div>
                    <div class="d-block float-none">
                        <span class="d-table-cell" style="font-size: 12px">Sudah punya akun?</span>
                        <a class="text-start d-table-cell forgot" href="./loginPage.php"
                            style="width: 111px; color: var(--bs-blue)">
                            <span style="text-decoration: underline; margin: 4px"> Login Disini!</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div data-aos="fade-down" data-aos-offset="0" data-aos-delay="300">
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>