<?php 
include 'koneksi.php';
include '../aset/header.php';
$query = mysqli_query($kon, "SELECT * FROM gender");
$que = mysqli_query($kon, "SELECT * FROM level");

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
  <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fa-plus"></i> Tambah Data Pasien</h2>
 </div>
 <div class="card-body"></div>
 <form action="proses-tambah.php" method="post">
 <table class="table">
 <tr>
 	<td>Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
 	<td>Alamat</td>
    <td><input type="text" name="alamat"></td>
</tr>
<tr>
 	<td>Usia</td>
    <td><input type="text" name="usia"></td>
</tr>
<tr>
 	<td>Suhu</td>
    <td><input type="text" name="suhu"></td>
</tr>
<tr>
 	<td>Riwayat Perjalanan</td>
    <td><input type="text" name="riwayat"></td>
</tr>
<tr>
 	<td>Gejala</td>
    <td><input type="text" name="gejala"></td>
</tr>
<tr>
 	<td>Telp</td>
    <td><input type="text" name="telp" ></td>
</tr>
<tr>
	<td>Gender</td>
	<td>
		<select style="width: 200px" name="id_gender">
			<option value="">-- Pilih Gender --</option>

			<?php 

			while ($gender = mysqli_fetch_assoc($query)
		):

			 ?>
			<option value="<?php echo $gender['id_gender']; ?>"><?php echo $gender['gender'];?></option>

			<?php
			 endwhile;
			?>
</select>
</td>
</tr>
<tr>
<td>Status</td>
	<td>
		<select style="width: 200px" name="id_level">
			<option value="">-- Pilih Level --</option>

			<?php 

			while ($level = mysqli_fetch_assoc($que)
		):

			 ?>
			<option value="<?php echo $level['id_level']; ?>"><?php echo $level['level'];?></option>

			<?php
			 endwhile;
			?>
</select>
</tr>
<tr>
 	<td></td>
    <td><button type="submit" style="width:190px; height: 50px" class="btn btn-primary" name="simpan">Simpan</button></td>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
 </body>
 </html>


 <?php 
include '../aset/footer.php';
  ?>