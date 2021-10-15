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

    <link rel="stylesheet" href="../css/style_register.css" />
</head>

<body class="text-center">
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
        padding: 75px;
        height: 100%;
        padding-top: 20px;
      ">
        <!-- REGISTER FORM -->
        <h1 style="margin-bottom: 40px; font-family: Anton, sans-serif">
            Daftar Sekarang
        </h1>
        <form action="../process/registerProcess.php" method="post" style="
          width: 500px;
          min-width: 100px;
          max-width: 500px;
          height: fit-content;
          padding: 50px;
          padding-top: 10px;
        ">
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
                <button class="btn btn-primary d-block w-100" type="submit" style="background: #ff7d00" name="register">
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
    </section>
</body>

</html>