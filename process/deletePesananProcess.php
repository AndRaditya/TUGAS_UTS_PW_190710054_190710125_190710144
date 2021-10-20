<?php
    if(isset($_GET['id_pesanan'])){
        include ('../db/db.php');
        $id_pesanan = $_GET['id_pesanan'];
        $queryDelete = mysqli_query($con, "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'") or die(mysqli_error($con));
        if($queryDelete){
            echo
            '<script>
            alert("Berhasil menghapus pesanan."); window.location = "../Menu/listPesananPage.php"
            </script>';
            session_destroy();
        }else{
            echo
            '<script>
            alert("Pesanan gagal dihapus."); window.location = "../Menu/listPesananPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
        }
?>
