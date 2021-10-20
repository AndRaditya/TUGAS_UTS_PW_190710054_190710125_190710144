<?php
//    session_start();
   include '../component/sidebar.php';
//    include '../db/db.php';
//    if (!$_SESSION['isLogin']) {
//        header("location: ../Login_Register/loginPage.php");
//    }
?>

<body>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D65106; box-shadow:
        0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>BUAT PESANAN BARU</h4>
        <hr>
        <form action="../process/createPesananProcess.php" method="post">
            <div class="mb-3">
                <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan"
                        placeholder="Nama Pemesan" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Namanya jangan lupa diisi!
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="no_meja" class="form-label">Nomor Meja</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="no_meja" name="no_meja"
                        placeholder="Nomor meja yang ditempati" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Jangan lupa isi Nomor Meja!
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="makanan" class="form-label">Makanan</label>
                <select class="form-select" id="makanan" name="makanan" required>
                    <option selected disabled value="">Pilih Makanan</option>
                    <option>Nasi Goreng</option>
                    <option>Mie Goreng</option>
                    <option>Mie Kuah</option>
                    <option>Bubur</option>
                    <option>Ayam Goreng</option>
                    <option>Ayam Bakar</option>
                </select>
                <div class="invalid-feedback">
                    Jangan lupa pilih makanan!
                </div>
            </div>

            <div class="mb-3">
                <label for="jumlah_makanan" class="form-label">Jumlah Makanan</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="jumlah_makanan" name="jumlah_makanan"
                        placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Jangan lupa isi jumlah makanannya!
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="keterangan_makanan" class="form-label">Keterangan Makanan yang Dipesan</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="keterangan_makanan" name="keterangan_makanan"
                        placeholder="Contoh: Tidak pedas. Tidak ada keterangan = -" aria-describedby="inputGroupPrepend"
                        required>
                    <div class="invalid-feedback">
                        Jangan lupa isi!
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="minuman" class="form-label">Minuman</label>
                <select class="form-select" id="minuman" name="minuman" required>
                    <option selected disabled value="">Pilih Minuman</option>
                    <option>Air Mineral</option>
                    <option>Es Teh Manis</option>
                    <option>Es Teler</option>
                </select>
                <div class="invalid-feedback">
                    Jangan lupa pilih minuman!
                </div>
            </div>

            <div class="mb-3">
                <label for="jumlah_minuman" class="form-label">Jumlah Minuman</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="jumlah_minuman" name="jumlah_minuman"
                        placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Jangan lupa isi jumlah minumannya!
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="keterangan_minuman" class="form-label">Keterangan Minuman yang Dipesan</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="keterangan_minuman" name="keterangan_minuman"
                        placeholder="Contoh: Tidak pakai es. Tidak ada keterangan = -"
                        aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Jangan lupa isi!
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="pesan">Buat Pesanan</button>
            </div>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>