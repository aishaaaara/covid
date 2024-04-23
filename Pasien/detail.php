<?php 
include '../aset/header.php';
include 'koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM pasien INNER JOIN gender ON pasien.id_gender= gender.id_gender where id_pasien = '$id_pasien'";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="container mt-4"  style="width: 60rem; margin: auto;">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0"><i class="fas fa-clipboard"></i> Detail Data Pasien</h4>
        </div>
        <div class="card-body" >
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th width="30%">Nama</th>
                            <td><?= $detail['nama'] ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?= $detail['alamat'] ?></td>
                        </tr>
                        <tr>
                            <th>Usia</th>
                            <td><?= $detail['usia'] ?> Tahun</td>
                        </tr>
                        <tr>
                            <th>Suhu</th>
                            <td><?= $detail['suhu'] ?></td>
                        </tr>
                        <tr>
                            <th>Riwayat Perjalanan</th>
                            <td><?= $detail['riwayat'] ?></td>
                        </tr>
                        <tr class="table-danger">
                            <th>Gejala</th>
                            <td><?= $detail['gejala'] ?></td>
                        </tr>
                        <tr>
                            <th>Telp</th>
                            <td><?= $detail['telp'] ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><?= $detail['gender'] ?></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><?= $detail['id_level'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="pasien.php?id_pasien=<?= $detail['id_pasien']; ?>" class="btn btn-primary btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>
