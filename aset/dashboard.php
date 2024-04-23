<?php include 'header.php';
session_start();

if (!isset($_SESSION['id_petugas']) && !isset($_COOKIE['username'])) {
    // Jika tidak ada sesi dan cookie tersimpan, arahkan ke halaman login
    header("Location: index.php");
    exit();
} ?>


<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <h2>Data Terkini</h2>
            <hr class="bg-light">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-info" style="border-radius: 30px;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah ODP</h5>
                    <p class="card-text" style="font-size: 60px;">5.800</p>
                    <a href="#" class="text-white">Dalam Pemantauan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning" style="border-radius: 30px;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah PDP</h5>
                    <p class="card-text" style="font-size: 60px;">4.008</p>
                    <a href="#" class="text-white">Dalam Pengawasan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger" style="border-radius: 30px;">
                <div class="card-body text-white">
                    <h5 class="card-title">Jumlah POSITIF</h5>
                    <p class="card-text" style="font-size: 60px;">7.342.424</p>
                    <a href="#" class="text-white">Confirm</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary" style="border-radius: 30px;">
                        <div class="card-body text-white">
                            <h5 class="card-title">Jumlah Sembuh</h5>
                            <p class="card-text" style="font-size: 60px;">6.682.091</p>
                            <a href="#" class="text-white">Sembuh</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>    Source: <a href="https://www.kompas.id/" class="alert-link">Kompas.com</a>
</div>
<?php include 'footer.php'; ?>
