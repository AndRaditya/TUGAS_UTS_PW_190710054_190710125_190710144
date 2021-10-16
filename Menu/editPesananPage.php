<?php
    // include '../component/sidebar.php'
    // $id = $_GET['id'];
    // $query = mysqli_query($con, "SELECT * FROM pesanan WHERE id='$id_pesanan'");
    // $dataPesanan = mysqli_fetch_assoc($query);

    session_start();
    include('../db/db.php');  
    $id = $_GET['id'];
    $id_pesanan = $_SESSION['id_pesanan'];
    $query = mysqli_query($con, "SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan'") or die(mysqli_error($con));
    $dataPesanan = mysqli_fetch_assoc($query);
?>
            <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D65106; box-shadow:
            0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
                <h4>EDIT PESANAN</h4>
                <hr>
                <form action="../process/editPesananProcess.php?id=<?php echo $dataPesanan['id_pesanan'];?>" method="post">
                    <div class="mb-3">
                        <label for="validationNama" class="form-label">Nama Pemesan</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationNama" name="nama_pemesan" 
                                placeholder="Nama Pemesan" aria-describedby="inputGroupPrepend" 
                                value="<?php echo $dataPesanan['nama_pemesan']; ?>" required>
                                    <div class="invalid-feedback">
                                        Namanya jangan lupa diisi!
                                    </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationNoMeja" class="form-label">Nomor Meja</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationNoMeja" name="no_meja" 
                                placeholder="Nomor meja yang ditempati" aria-describedby="inputGroupPrepend" 
                                value="<?php echo $dataPesanan['no_meja']; ?>" required>
                                    <div class="invalid-feedback">
                                        Jangan lupa isi Nomor Meja!
                                    </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationMakanan" class="form-label">Makanan</label>
                            <select class="form-select" id="validationMakanan" name="validationMakanan" required>
                                <option selected disabled value="">Pilih Makanan</option>
                                <?php
                                    $temp=0;
                                    $arr= ['-', 'Nasi Goreng', 'Mie Goreng', 'Mie Kuah', 'Bubur', 'Ayam Goreng', 'Ayam Bakar'];

                                    do{
                                        if($dataPesanan['validationMakanan'] ==$arr[$temp]){
                                            break;
                                        }
                                        $temp++;
                                    } while($dataPesanan['validationMakanan'] !=$arr[$temp]);

                                    if($dataPesanan['validationMakanan'] ==$arr[$temp]){
                                    ?>
                                    <option value="<?php echo $dataPesanan['validationMakanan']?>" selected>
                                    <?php echo $dataPesanan['validationMakanan'] ?>
                                    </option>
                                    <?php
                                    }
                                    foreach($arr as $value){
                                        if($dataPesanan['validationMakanan'] !=$value){
                                    ?>
                                        <option value="<?php echo $value?>"><?php echo $value?></option>
                                    <?php
                                        }
                                    }
                                ?>
                            </select>
                                <div class="invalid-feedback">
                                    Jangan lupa pilih makanan!
                                </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationJumlahMakanan" class="form-label">Jumlah Makanan</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationJumlahMakanan" name="validationJumlahMakanan" 
                                placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend" 
                                value="<?php echo $dataPesanan['validationJumlahMakanan']; ?>" required>
                                    <div class="invalid-feedback">
                                        Jangan lupa isi jumlah makanannya!
                                    </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationKeteranganMakanan" class="form-label">Keterangan Makanan yang Dipesan</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationKeteranganMakanan" name="validationKeteranganMakanan" 
                                placeholder="Contoh: Tidak pedas. Tidak ada keterangan = -" aria-describedby="inputGroupPrepend" 
                                value="<?php echo $dataPesanan['validationKeteranganMakanan']; ?>" required>
                                    <div class="invalid-feedback">
                                        Jangan lupa isi!
                                    </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationMinuman" class="form-label">Minuman</label>
                            <select class="form-select" id="validationMinuman" name="validationMinuman" required>
                                <option selected disabled value="">Pilih Minuman</option>
                                <?php
                                    $temp=0;
                                    $arr= ['-', 'Air Mineral', 'Es Teh Manis', 'Es Teler'];

                                    do{
                                        if($dataPesanan['validationMinuman'] ==$arr[$temp]){
                                            break;
                                        }
                                        $temp++;
                                    } while($dataPesanan['validationMinuman'] !=$arr[$temp]);

                                    if($dataPesanan['validationMinuman'] ==$arr[$temp]){
                                    ?>
                                    <option value="<?php echo $dataPesanan['validationMinuman']?>" selected>
                                    <?php echo $dataPesanan['validationMinuman'] ?>
                                    </option>
                                    <?php
                                    }
                                    foreach($arr as $value){
                                        if($dataPesanan['validationMinuman'] !=$value){
                                    ?>
                                        <option value="<?php echo $value?>"><?php echo $value?></option>
                                    <?php
                                        }
                                    }
                                ?>
                            </select>
                                <div class="invalid-feedback">
                                    Jangan lupa pilih minuman!
                                </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationJumlahMinuman" class="form-label">Jumlah Minuman</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationJumlahMinuman" name="validationJumlahMinuman" 
                                placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend" 
                                value="<?php echo $dataPesanan['validationJumlahMinuman']; ?>" required>
                                    <div class="invalid-feedback">
                                        Jangan lupa isi jumlah minumannya!
                                    </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="validationKeteranganMinuman" class="form-label">Keterangan Minuman yang Dipesan</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationKeteranganMinuman" name="validationKeteranganMinuman" 
                                placeholder="Contoh: Tidak pakai es. Tidak ada keterangan = -" aria-describedby="inputGroupPrepend" 
                                value="<?php echo $dataPesanan['validationKeteranganMinuman']; ?>" required>
                                    <div class="invalid-feedback">
                                        Jangan lupa isi!
                                    </div>
                            </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="edit">Buat Pesanan</button>
                    </div>
                    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
        MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>