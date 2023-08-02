<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<h2>CRUD DATA MATAKULIAH </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA MATAKULIAH</h3>
<?php
include 'koneksi.php';
$kd_mk = $_GET['kd_mk'];
$data = mysqli_query($koneksi,"select * from matakuliah where
kd_mk='$kd_mk'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
<table>
<tr>
<td>Kd_MK</td>
<td>
<input type="hidden" name="kd_mk" value="<?php echo $d['kd_mk'];
?>">
<input type="text" name="nama_mk" value="<?php echo $d['nama_mk'];
?>">
</td>
</tr>
<tr>
<td>SKS</td>
<td><input type="number" name="sks" value="<?php echo
$d['sks']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
