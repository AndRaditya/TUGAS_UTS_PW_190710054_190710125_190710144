<?php      
    if(isset($_POST['edit'])){ 
        include('../db.php');

        $id_pesanan = $_GET['id_pesanan'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $no_meja = $_POST['no_meja'];
        $makanan = $_POST['validationMakanan'];
        $jumlah_makanan = $_POST['validationJumlahMakanan'];
        $keterangan_makanan = $_POST['validationKeteranganMakanan'];
        $minuman = $_POST['validationMinuman'];
        $jumlah_minuman = $_POST['validationJumlahMinuman'];
        $keterangan_minuman = $_POST['validationKeteranganMinuman'];
                        
        $queryEdit = mysqli_query($con, 
        "UPDATE pesananan SET validationNama='$nama_pemesan', validationNoMeja='$no_meja', validationMakanan='$makanan', 
        validationJumlahMakanan='$jumlah_makanan', validationKeteranganMakanan='$keterangan_makanan', validationMakanan='$makanan', 
        validationJumlahMakanan='$jumlah_makanan', validationKeteranganMakanan='$keterangan_makanan' WHERE id=$id_pesanan") 
            or die(mysqli_error($con));
        if($queryEdit){           
            echo                 
            '<script>                    
            alert("Edit Success"); window.location = ".../Page/listPesananPage.php"                
            </script>';        
        }else{           
            echo                 
            '<script>                    
            alert("Edit Failed"); window.location = ".../Page/listPesananPage.php"                
            </script>';       
        }   
                                        
    }else{        
        echo         
        '<script>            
        window.history.back()        
        </script>';    
    }
?>