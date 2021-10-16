<?php
    require('../db/db.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM users where verif_code = '$code'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['id'];
            $sql =  "UPDATE users set is_verified=1 where id=$id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <title>Register Sukes Design</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link rel="stylesheet" href="../css/styleRegisterSukses.css">
            </head>

            <body>
                <div class="text-center d-md-flex justify-content-md-center align-items-md-center">
                    <h1>Verifikasi Sukses, silahkan login&nbsp;
                        <a href="../TampilanAwal/tampilanAwal.php">Disini</a>
                    </h1>
                </div>
            </body>
            </html>
            ';
            }else{
                echo "VERIFIKASI GAGAL ERROR : ".$query;
            }
        }else {
            echo "CODE TIDAK DITEMUKAN ATAU TIDAK VALID";
        }
    }else {
        echo "!!!!!";
    }

?>