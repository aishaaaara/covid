<?php 
include 'koneksi.php';
$sql = "SELECT * FROM pasien ORDER BY nama";
$res = mysqli_query($kon, $sql);
$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}

session_start();

if (!isset($_SESSION['id_petugas']) && !isset($_COOKIE['username'])) {
    // Jika tidak ada sesi dan cookie tersimpan, arahkan ke halaman login
    header("Location: index.php");
    exit();
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <h2>Data Pasien</h2>
            <hr>
            <input type="text" id="searchInput" class="form-control" placeholder="Cari pasien...">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <table class="table table-bordered" id="dataPasien">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Usia</th>
                                <th>Suhu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($pinjam as $p) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td><?= $p['usia'] ?></td>
                                <td><?= $p['suhu'] ?></td>
                                <td>
                                    <a href="detail.php?id_pasien=<?= $p['id_pasien']; ?>" class="badge badge-secondary">Detail</a>
                                    <a href="edit.php?id_pasien=<?= $p['id_pasien']; ?>" class="badge badge-light">Edit</a>
                                    <a href="hapus.php?id_pasien=<?= $p['id_pasien']; ?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php  
                            $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <a href="tambah.php" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i> Tambah</a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#dataPasien tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

<?php include '../aset/footer.php'; ?>
