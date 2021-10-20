<?php
    include ('../db/db.php');
    $id = $_GET['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id=$id") or die(mysqli_error($con));
    if($queryDelete){
        ob_start();
        session_start();
        session_destroy();
        echo
            '<script>
            alert("Profil berhasil dihapus."); window.location = "../TampilanAwal/tampilanAwal.php"
            </script>';
    }else{
        echo
            '<script>
            alert("Profil gagal dihapus."); window.location = "../Profile/EditProfilePage.php"
            </script>';
    }
?>