<?php 
include 'koneksi.php';
include '../aset/header.php';
$id_pasien = $_GET["id_pasien"];
$query = mysqli_query($kon,"SELECT * FROM pasien INNER JOIN gender ON pasien.id_gender = gender.id_gender WHERE id_pasien=$id_pasien");
$query1 = mysqli_query($kon,"SELECT * FROM pasien INNER JOIN level ON pasien.id_level = level.id_level WHERE id_pasien=$id_pasien");

$pasien = mysqli_fetch_assoc($query);
$pasien1 = mysqli_fetch_assoc($query1);

?>
<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><i class="fas fa-edit"></i> Edit Pasien</h2>
                </div>
                <div class="card-body">
                    <form action="edit-proses.php" method="post">
                        <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $pasien['nama'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $pasien['alamat'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="text" class="form-control" name="usia" value="<?= $pasien['usia'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="suhu">Suhu</label>
                            <input type="text" class="form-control" name="suhu" value="<?= $pasien['suhu'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="riwayat">Riwayat Perjalanan</label>
                            <input type="text" class="form-control" name="riwayat" value="<?= $pasien['riwayat'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <input type="text" class="form-control" name="gejala" value="<?= $pasien['gejala'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="text" class="form-control" name="telp" value="<?= $pasien['telp'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="id_gender" required>
                                <?php 
                                $query_gender = mysqli_query($kon, "SELECT * FROM gender");
                                while ($data_gender = mysqli_fetch_assoc($query_gender)) {
                                    $selected = ($data_gender['id_gender'] == $pasien['id_gender']) ? 'selected' : '';
                                    echo "<option value='".$data_gender['id_gender']."' ".$selected.">".$data_gender['gender']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" name="id_level" required>
                                <?php 
                                $query_level = mysqli_query($kon, "SELECT * FROM level");
                                while ($data_level = mysqli_fetch_assoc($query_level)) {
                                    $selected = ($data_level['id_level'] == $pasien1['id_level']) ? 'selected' : '';
                                    echo "<option value='".$data_level['id_level']."' ".$selected.">".$data_level['level']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="submit" class="btn btn-secondary" name="kembali">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include '../aset/footer.php';
?>
