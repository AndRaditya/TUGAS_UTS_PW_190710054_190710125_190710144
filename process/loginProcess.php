<?php
    require ('../db/db.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where username = '$username'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0 ){
        echo '<script>alert("User not found!"); window.location = "../Login_Register/loginPage.php"</script>';
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['username'] = $username;

                echo '<script>alert("Login Success"); window.location = "../Beranda.php"</script>';
            }else {
                echo'<script>alert("Verifikasi Email Terlebih Dahulu!");window.location = "../Login_Register/loginPage.php"</script>';
            }
        }else {
            echo'<script>alert("Username or Password Invalid");window.location = "../Login_Register/loginPage.php"</script>';
        }
    }
?>