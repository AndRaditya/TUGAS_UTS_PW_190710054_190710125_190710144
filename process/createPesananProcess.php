<?php
    if(isset($_POST['pesan'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db/db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $nama_pemesan = $_POST['nama_pemesan'];
        $no_meja = $_POST['no_meja'];
        $makanan = $_POST['makanan'];
        $jumlah_makanan = $_POST['jumlah_makanan'];
        $keterangan_makanan = $_POST['keterangan_makanan'];
        $minuman = $_POST['minuman'];
        $jumlah_minuman = $_POST['jumlah_minuman'];
        $keterangan_minuman = $_POST['keterangan_minuman'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
        "INSERT INTO pesanan(nama_pemesan, no_meja, makanan, jumlah_makanan, 
        keterangan_makanan, minuman, jumlah_minuman, keterangan_minuman)
            VALUES
        ('$nama_pemesan', '$no_meja', '$makanan', '$jumlah_makanan', '$keterangan_makanan', 
        '$minuman', '$jumlah_minuman', '$keterangan_minuman')")
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo
                '<script>
                alert("Berhasil membuat pesanan."); window.location = "../Menu/listPesananPage.php"
                </script>';
                // session_start();
                // $_SESSION['id_pesanan'] = $id_pesanan;
        }else{
            echo
                '<script>
                alert("Gagal membuat pesanan.");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>