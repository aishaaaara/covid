<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
     $id_pasien       = $_POST['id_pasien'];
     $nama            = $_POST['nama'];
     $alamat          = $_POST['alamat'];
     $usia            = $_POST['usia'];
     $suhu            = $_POST['suhu'];
     $riwayat         = $_POST['riwayat'];
     $gejala          = $_POST['gejala'];
     $telp            = $_POST['telp'];
     $id_gender       = $_POST['id_gender'];
     $id_level          = $_POST['id_level'];
     


     $sql="UPDATE pasien SET nama='$nama', alamat='$alamat',
      usia='$usia', suhu='$suhu',
       riwayat='$riwayat',  gejala='$gejala', telp='$telp', id_gender='$id_gender', id_level='$id_level' WHERE id_pasien='$id_pasien'";
     
     $res = mysqli_query($kon, $sql);
     $count = mysqli_affected_rows($kon);

     if ($res > 0) 
     {
     	echo
     	"
     	<script>
	     alert('Data Berhasil Diubah!');
	     document.location.href='pasien.php';
</script>";
     }
}

include '../aset/header.php';
?>