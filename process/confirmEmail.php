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
                echo '<script>alert("Verification Success"); window.location = "../Login_Register/loginPage.php"</script>';
            }else{
                echo "Verifikasi anda mengalami kendala : ".$query;
            }
        }else {
            echo
                '<script>
                alert("Data Failed");
                </script>';
        }
    }else {
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>