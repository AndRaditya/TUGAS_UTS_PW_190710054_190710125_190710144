<?php
    include '../component/sidebar.php'
?>

        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow:
        0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <h4>BUAT PESANAN BARU</h4>
            <hr>
            <form action="../process/createPesananProcess.php" method="post">
            <input type="text" name="id" value="<?= $user['id'];?>" hidden>
                <div class="mb-3">
                    <label for="validationNama" class="form-label">Nama Pemesan</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationNama" name="nama_pemesan" 
                            placeholder="Nama Pemesan" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Namanya jangan lupa diisi!
                                </div>
                        </div>
                </div>

                <div class="mb-3">
                    <label for="validationNoMeja" class="form-label">Nomor Meja</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationNoMeja" name="no_meja" 
                            placeholder="Nomor meja yang ditempati" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Jangan lupa isi Nomor Meja!
                                </div>
                        </div>
                </div>

                <div class="mb-3">
                    <label for="validationMakanan" class="form-label">Makanan</label>
                        <select class="form-select" id="validationMakanan" name="makanan" required>
                            <option selected disabled value="">Pilih Makanan</option>
                            <option>-</option>
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
                    <label for="validationJumlahMakanan" class="form-label">Jumlah Makanan</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationJumlahMakanan" name="jumlah_makanan" 
                            placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Jangan lupa isi jumlah makanannya!
                                </div>
                        </div>
                </div>

                <div class="mb-3">
                    <label for="validationKeteranganMakanan" class="form-label">Keterangan Makanan yang Dipesan</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationKeteranganMakanan" name="keterangan_makanan" 
                            placeholder="Contoh: Tidak pedas. Tidak ada keterangan = -" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Jangan lupa isi!
                                </div>
                        </div>
                </div>

                <div class="mb-3">
                    <label for="validationMinuman" class="form-label">Minuman</label>
                        <select class="form-select" id="validationMinuman" name="minuman" required>
                            <option selected disabled value="">Pilih Minuman</option>
                            <option>-</option>
                            <option>Air Mineral</option>
                            <option>Teh Manis</option>
                            <option>Es Teler</option>
                        </select>
                            <div class="invalid-feedback">
                                Jangan lupa pilih minuman!
                            </div>
                </div>

                <div class="mb-3">
                    <label for="validationJumlahMinuman" class="form-label">Jumlah Minuman</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationJumlahMinuman" name="jumlah_minuman" 
                            placeholder="1, 2, 3, dst." aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Jangan lupa isi jumlah minumannya!
                                </div>
                        </div>
                </div>

                <div class="mb-3">
                    <label for="validationKeteranganMinuman" class="form-label">Keterangan Minuman yang Dipesan</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationKeteranganMinuman" name="keterangan_minuman" 
                            placeholder="Contoh: Tidak pakai es. Tidak ada keterangan = -" aria-describedby="inputGroupPrepend" required>
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
    </aside>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>