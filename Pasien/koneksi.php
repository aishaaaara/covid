<?php
$kon= mysqli_connect("localhost","root","","db_covid");

//check connection
if (mysqli_connect_error()) {
	echo "koneksi database gagal : " . mysqli_connect_error();
}

?>