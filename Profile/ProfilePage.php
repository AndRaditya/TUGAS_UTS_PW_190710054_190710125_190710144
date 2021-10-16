<?php
    session_start();
    include('../db/db.php');  
    $username = $_SESSION['username'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") 
    or die(mysqli_error($con));
    $user = mysqli_fetch_assoc($query);
?>

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

  <link rel="stylesheet" href="../css/styleProfile.css" />
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
                        <a class="nav-link" href="../Menu/Menu.html">Menu</a>
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
        </div>

        <div id="main">
            <span style="cursor: pointer;"onclick="toogleSidebar()">&#9776; </span>
            <div></div>
            <div></div>
            <div></div>
            <div class="container-fluid" id="body-profile">
                <div class="awalanProfile">
                    <h2 class="header">Profile</h2>
                    <div class="row">
                        <div class="col-lg-4 row" id="headerProfileIsi">
                            <b style="font-size: 20px;">Nama</b>
                            <b style="font-size: 20px;">Email</b>
                            <b style="font-size: 20px;">Nomor Telepon</b>
                            <b style="font-size: 20px;">Username</b>
                        </div>
                        <div class="col-lg-6" id="isiProfile">
                            <p style="font-size: 20px"><?php echo $user['name'] ?></p>
                            <p style="font-size: 20px"><?php echo $user['email'] ?></p>
                            <p style="font-size: 20px"><?php echo $user['nomor_telepon'] ?></p>
                            <p style="font-size: 20px"><?php echo $user['username'] ?></p>
                        </div>
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