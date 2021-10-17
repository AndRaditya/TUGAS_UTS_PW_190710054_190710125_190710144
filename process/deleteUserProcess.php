<?php
    include ('../db/db.php');
    $id = $_GET['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id=$id") or die(mysqli_error($con));
    if($queryDelete){
        echo
            '<script>
            alert("Delete Success"); window.location = "../TampilanAwal/tampilanAwal.php"
            </script>';
            session_destroy();
    }else{
        echo
            '<script>
            alert("Delete Failed"); window.location = "../Profile/EditProfilePage.php"
            </script>';
    }
?>