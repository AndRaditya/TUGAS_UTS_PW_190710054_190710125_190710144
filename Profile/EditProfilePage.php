<?php
    session_start();
    if (!$_SESSION['isLogin']) {
        header("location: ../Login_Register/loginPage.php");
    }else {
        include('../db/db.php');  
        // $id = $_GET['id'];
        $username = $_SESSION['username'];
        $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
        $user = mysqli_fetch_assoc($query);
    }
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>MAC Resto - Edit Profile</title>
    <link rel="icon" href="../Images/restaurant (1).png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton" />
    <link rel="stylesheet" href="../css/styleEditProfile.css" />
    <link rel="stylesheet" href="../css/navbar.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="../Menu/Menu.php">Menu</a>
                    </li>
                    <li class="nav-item active a">
                        <a class="nav-link" href="../Profile/Profile.php">Profil</a>
                    </li>
                    <li class="nav-item" style="margin-left: 16px">
                        <a class="nav-link" href="../process/logoutProcess.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="app">
        <!-- <div data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine"> -->
            <div id="mySidenav" class="sidenav">
                <div class="col-md-12" style="height: 114px; ">
                    <h2 style="color: black; font-size: 24px; padding-top: 20px; font-style: bold;">Hello, </h2>
                    <p style="color: black; font-size: 20px;"> <?php echo $user['name'] ?> </p>
                </div>

                <div class="col-md-8" id="buttonSidenav">
                    <a href="../Profile/ProfilePage.php" id="btn_profile">
                        <button class="btn btn-light"
                            style="margin-right: 20px; background-color: #D65106; color:white; outline-color: #D65106;">
                            Profile
                        </button>
                    </a>

                    <a href="../Profile/EditProfilePage.php" id="btn_editProfile">
                        <button class="btn btn-light"
                            style="margin-right: 20px; background-color: #D65106; color:white; outline-color: #D65106;">
                            Edit Profile
                        </button>
                    </a>
                </div>
            <!-- </div> -->
        </div>

        <div id="main">
            <span style="cursor: pointer;" onclick="toogleSidebar()">&#9776; </span>
            <div></div>
            <div></div>
            <div></div>
            <div data-aos="fade-in-up" data-aos-offset="0">
                <div class="col-xxl-10 container-fluid" id="body-profile" style="margin-top: 16px; margin-left: 16px;">
                    <form action="../process/editProfileProcess.php" method="post">
                        <input type="text" name="id" value="<?= $user['id'];?>" hidden>
                        <div class="awalanProfile" style="margin-left: 48px; margin-top: 16px">
                            <h2 class="header">Edit Profile</h2>
                            <div class="row g-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <b style="font-size: 20px;">Nama</b>
                                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp"
                                            value="<?php echo $user['name']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <b style="font-size: 20px;">Email</b>
                                        <input class="form-control" id="email" name="email" aria-describedby="emailHelp"
                                            type="email" value="<?php echo $user['email']; ?>" required disabled>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <b style="font-size: 20px;">Nomor Telepon</b>
                                        <input class="form-control" id="nomor_telepon" name="nomor_telepon"
                                            aria-describedby="emailHelp" value="<?php echo $user['nomor_telepon']; ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <b style="font-size: 20px;">Username</b>
                                        <input class="form-control" id="username" name="username"
                                            aria-describedby="emailHelp" value="<?php echo $user['username']; ?>"
                                            required disabled>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center" style="padding-bottom: 16px">
                                    <button class="btn btn-primary" type="submit" value="edit" name="edit"
                                        style="width: 250px;" onclick="showAlertEdit()">
                                        Edit Akun
                                    </button>
                                    <a href="../process/deleteUserProcess.php?id=<?php echo $user['id'] ?>"
                                        class="btn btn-danger" style="width: 250px;" onclick="showAlert()">
                                        Delete Akun
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="../js/navbarProfile.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>