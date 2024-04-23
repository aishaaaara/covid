<?php 
include 'koneksi.php';

$id_pasien = $_GET['id_pasien'];

mysqli_query($kon,"DELETE FROM pasien WHERE id_pasien = '$id_pasien'");

echo "<script> alert('Data have deleted!');document.location='pasien.php'</script>"
 ?>