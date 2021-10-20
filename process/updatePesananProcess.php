<?php      
    if(isset($_POST['id_pesanan'])){ 
        include('../db/db.php');

        $id_pesanan = $_POST['id_pesanan'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $no_meja = $_POST['no_meja'];
        $makanan = $_POST['makanan'];
        $jumlah_makanan = $_POST['jumlah_makanan'];
        $keterangan_makanan = $_POST['keterangan_makanan'];
        $minuman = $_POST['minuman'];
        $jumlah_minuman = $_POST['jumlah_minuman'];
        $keterangan_minuman = $_POST['keterangan_minuman'];
                        
        $queryEdit = mysqli_query($con, 
        "UPDATE pesanan SET nama_pemesan='$nama_pemesan', no_meja='$no_meja', makanan='$makanan', 
        jumlah_makanan='$jumlah_makanan', keterangan_makanan='$keterangan_makanan', minuman='$minuman',
        jumlah_minuman='$jumlah_minuman', keterangan_minuman='$keterangan_minuman' WHERE id_pesanan=$id_pesanan") 
            or die(mysqli_error($con));

        // $queryEdit=mysqli_query($con, 
        // "UPDATE pesanan SET nama_pemesan='$nama_pemesan', no_meja='$no_meja', makanan='$makanan', 
        // jumlah_makanan='$jumlah_makanan', keterangan_makanan='$keterangan_makanan', minuman='$minuman',
        // jumlah_minuman='$jumlah_minuman', keterangan_minuman='$keterangan_minuman' WHERE id_pesanan=$id_pesanan");

        if($queryEdit){           
            echo                 
                '<script>                    
                alert("Edit pesanan berhasil."); window.location = "../Menu/listPesananPage.php"                
                </script>';        
        }else{           
            echo                 
                '<script>                    
                alert("Edit pesanan gagal."); window.location = "../Menu/listPesananPage.php"                
                </script>';       
        }                    
    }else{        
        echo         
            '<script>            
            window.history.back()        
            </script>';    
    }
?>