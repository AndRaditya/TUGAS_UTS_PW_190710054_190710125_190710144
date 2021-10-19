<?php
    session_start();
    include '../component/sidebar.php';
    include '../db/db.php';
    if (!$_SESSION['isLogin']) {
        header("location: ../Login_Register/loginPage.php");
    }
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D65106; box-shadow:
        0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>DAFTAR PESANAN</h4>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No </th>
                <th scope="col">Nama</th>
                <th scope="col">No. Meja</th>
                <th scope="col">Makanan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">K. Makanan</th>
                <th scope="col">Minuman</th>
                <th scope="col">Jumlah</th>
                <th scope="col">K. Minuman</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM pesanan") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['nama_pemesan'].'</td>
                            <td>'.$data['no_meja'].'</td>
                            <td>'.$data['makanan'].'</td>
                            <td>'.$data['jumlah_makanan'].'</td>
                            <td>'.$data['keterangan_makanan'].'</td>
                            <td>'.$data['minuman'].'</td>
                            <td>'.$data['jumlah_minuman'].'</td>
                            <td>'.$data['keterangan_minuman'].'</td>
                            <td>
                            
                                <a href="../Menu/editPesananPage.php?id_pesanan='.$data['id_pesanan'].'">
                                    <i style="color: green" class="fa fa-pencil-square-o"></i>
                                </a>
                                <a href="../process/deletePesananProcess.php?id_pesanan='.$data['id_pesanan'].'"
                                    onClick="return confirm ( \'Anda yakin ingin membatalkan pesanan?\')">
                                    <i style="color: red" class="fa fa-ban"></i>
                                </a>
                            </td>
                        </tr>
                        ';
                    $no++;
                    }
                }
            ?>
        </tbody>
    </table>
</div>
</aside>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>