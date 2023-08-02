<!DOCTYPE html>
<html lang="en">
<head>
<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<h2>CRUD DATA DOSEN </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA DOSEN</h3>
<?php
include 'koneksi.php';
$kd_dosen = $_GET['kd_dosen'];
$data = mysqli_query($koneksi,"select * from dosen where
kd_dosen='$kd_dosen'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="kd_dosen" value="<?php echo $d['kd_dosen'];
?>">
<input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen'];
?>">
</td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?php echo
$d['email']; ?>"></td>
</tr>
<tr>
<td>No Hp</td>
<td><input type="number" name="no_hp" value="<?php echo
$d['no_hp']; ?>"></td>
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