<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Candra</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton" />

    <link rel="stylesheet" href="../css/styleEditProfile.css" />
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-4 mb-5 bg-white navbaredit">
        <div class="container-fluid">
            <div class="col-md-8" id>
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
                        <a class="nav-link" href="../Profile/Profile.php">Profil</a>
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

    <div id="app">
        <div id="mySidenav" class="sidenav">
            <div class="col-md-12" style="height: 114px;">
                <img src="../Images/user.png" style="width: 85px; height:85px; margin-right: 14px; margin-left: 10px;"
                    align="left">
                <h2 style="color: black; font-size: 24px; padding-top: 20px;">Hello, </h2>
                <p style="color: black; font-size: 20px;">Candra Pangi Hutan</p>
            </div>

            <div class="col-md-8" id="buttonSidenav">
                <a href="../Profile/Profile.html" id="btn_profile">
                    <button class="btn btn-light"
                        style="margin-right: 20px; background-color: #D65106; color:white; outline-color: #D65106;">
                        Profile
                    </button>
                </a>

                <a href="../Profile/EditProfile.html" id="btn_editProfile">
                    <button class="btn btn-light"
                        style="margin-right: 20px; background-color: #D65106; color:white; outline-color: #D65106;">
                        Edit Profile
                    </button>
                </a>
            </div>
        </div>

        <div id="main">
            <span onclick="toogleSidebar()">&#9776; </span>
            <div></div>
            <div></div>
            <div></div>
            <div class="container-fluid" id="body-profile">
                <div class="column" id="containerFoto">
                    <img src="../Images/user.png"
                        style="height: 277px; width: 277px; margin-left: 40px; margin-top: 40px;" align="left">
                    <button id="buttonGantiFoto">
                        Ganti Foto
                    </button>
                </div>
                <div class="awalanProfile">
                    <h2 class="header">Profile</h2>
                    <div class="row g-3" style="margin-top: 16px;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h2>Nama</h2>
                                <input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h2>Email</h2>
                                <input type="email" class="form-control" name="Email" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h2>Nomor Telepon</h2>
                                <input type="text" class="form-control" name="phoneNumber"
                                    placeholder="Masukkan Nomor Telepon">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h2>Username</h2>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                            <button class="btn btn-primary" type="submit" id="buttonSubmitProfile">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="../js/navbarProfile.js"></script>

</body>

</html>