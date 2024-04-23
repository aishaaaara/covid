<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) 
{
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$suhu = $_POST['suhu'];
$riwayat = $_POST['riwayat'];
$gejala = $_POST['gejala'];
$telp = $_POST['telp'];
$id_gender = $_POST['id_gender'];
$id_level = $_POST['id_level'];

$query =mysqli_query($kon,"INSERT INTO pasien (nama, alamat, usia, suhu, riwayat, gejala, telp, id_gender, id_level)
        VALUES ('$nama','$alamat', '$usia','$suhu', '$riwayat', '$gejala', '$telp', '$id_gender', '$id_level')");
if($query>0){
	echo "
	<script>
	     alert('Data Berhasil Ditambahkan');
	     document.location.href='pasien.php';
</script>
	";
}
}
 ?>