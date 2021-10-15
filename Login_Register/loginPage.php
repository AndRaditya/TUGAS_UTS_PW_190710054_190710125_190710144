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
    <link rel="stylesheet" href="../css/style_login.css" />
</head>

<body class="text-center">
    <!-- navbar lama -->
    <div>
      <nav
        class="
          navbar navbar-light navbar-expand-md
          sticky-top
          navigation-clean-button
        "
        style="height: 80px; color: #ffffff; background: #ff7d00"
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../image/resto.png" width="50px" height="50xp" />&nbsp;MAC
            Resto
          </a>
          <button
            data-bs-toggle="collapse"
            class="navbar-toggler"
            data-bs-target="#navcol-1"
          >
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navcol-1">
          </div>
        </div>
      </nav>
    </div>
    <section class="login-clean" style="
        width: 100%;
        background: rgb(241, 247, 252);
        padding: 200px;
        padding-top: 75px;
      ">
        <!-- LOGIN FORM -->
        <form action="../process/loginProcess.php" method="post" style="
          width: 400px;
          min-width: 100px;
          max-width: 400px;
          height: 600px;
          max-height: 600px;
          min-height: 100px;
          padding: 60px;
        ">
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
                <button class="btn btn-primary d-block w-100" type="submit" style="background: #ff7d00" name="login">
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
    </section>
</body>

</html>