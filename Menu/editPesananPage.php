<?php  
    session_start();
    include '../component/sidebar.php';
    include('../db/db.php');  
    if (!$_SESSION['isLogin']) {
        header("location: ../Login_Register/loginPage.php");
    }else {
        $id_pesanan = $_GET['id_pesanan'];
        // $id_pesanan = $_SESSION['id_pesanan'];
        $query = mysqli_query($con, "SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan'") or die(mysqli_error($con));
        $dataPesanan = mysqli_fetch_assoc($query);
    }
    // include('../db/db.php');  
    // $id = $_GET['id'];
    // $id_pesanan = $_SESSION['id_pesanan'];
    // $query = mysqli_query($con, "SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan'") or die(mysqli_error($con));
    // $dataPesanan = mysqli_fetch_assoc($query);
?>

<body>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D65106; box-shadow:
            0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>EDIT PESANAN</h4>
    <hr>
    <form action="../process/updatePesananProcess.php" method="post">
        <input type="text" name="id_pesanan" value="<?= $dataPesanan['id_pesanan'];?>" hidden>
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
            <label for="makanan" class="form-label">Makanan</label>
            <select class="form-select" id="makanan" name="makanan" required>
                <option selected disabled value="">Pilih Makanan</option>
                <?php
                                    $temp=0;
                                    $arr= ['-', 'Nasi Goreng', 'Mie Goreng', 'Mie Kuah', 'Bubur', 'Ayam Goreng', 'Ayam Bakar'];

                                    do{
                                        if($dataPesanan['makanan'] ==$arr[$temp]){
                                            break;
                                        }
                                        $temp++;
                                    } while($dataPesanan['makanan'] !=$arr[$temp]);

                                    if($dataPesanan['makanan'] ==$arr[$temp]){
                                    ?>
                <option value="<?php echo $dataPesanan['makanan']?>" selected>
                    <?php echo $dataPesanan['makanan'] ?>
                </option>
                <?php
                                    }
                                    foreach($arr as $value){
                                        if($dataPesanan['makanan'] !=$value){
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
            <label for="jumlah_makanan" class="form-label">Jumlah Makanan</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="jumlah_makanan" name="jumlah_makanan"
                    placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend"
                    value="<?php echo $dataPesanan['jumlah_makanan']; ?>" required>
                <div class="invalid-feedback">
                    Jangan lupa isi jumlah makanannya!
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="keterangan_makanan" class="form-label">Keterangan Makanan yang Dipesan</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="keterangan_makanan"
                    name="keterangan_makanan" placeholder="Contoh: Tidak pedas. Tidak ada keterangan = -"
                    aria-describedby="inputGroupPrepend"
                    value="<?php echo $dataPesanan['keterangan_makanan']; ?>" required>
                <div class="invalid-feedback">
                    Jangan lupa isi!
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="minuman" class="form-label">Minuman</label>
            <select class="form-select" id="minuman" name="minuman" required>
                <option selected disabled value="">Pilih Minuman</option>
                <?php
                                    $temp=0;
                                    $arr= ['-', 'Air Mineral', 'Es Teh Manis', 'Es Teler'];

                                    do{
                                        if($dataPesanan['minuman'] ==$arr[$temp]){
                                            break;
                                        }
                                        $temp++;
                                    } while($dataPesanan['minuman'] !=$arr[$temp]);

                                    if($dataPesanan['minuman'] ==$arr[$temp]){
                                    ?>
                <option value="<?php echo $dataPesanan['minuman']?>" selected>
                    <?php echo $dataPesanan['minuman'] ?>
                </option>
                <?php
                                    }
                                    foreach($arr as $value){
                                        if($dataPesanan['minuman'] !=$value){
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
            <label for="jumlah_minuman" class="form-label">Jumlah Minuman</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="jumlah_minuman" name="jumlah_minuman"
                    placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend"
                    value="<?php echo $dataPesanan['jumlah_minuman']; ?>" required>
                <div class="invalid-feedback">
                    Jangan lupa isi jumlah minumannya!
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="keterangan_minuman" class="form-label">Keterangan Minuman yang Dipesan</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="keterangan_minuman"
                    name="keterangan_minuman" placeholder="Contoh: Tidak pakai es. Tidak ada keterangan = -"
                    aria-describedby="inputGroupPrepend"
                    value="<?php echo $dataPesanan['keterangan_minuman']; ?>" required>
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