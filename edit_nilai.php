<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<h2>CRUD DATA NILAI </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA NILAI</h3>
<?php
include 'koneksi.php';
$id_nilai = $_GET['id_nilai'];
$data = mysqli_query($koneksi,"select * from nilai where
id_nilai='$id_nilai'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
<table>
<tr>
<td>KD_MK</td>
<td>
<input type="hidden" name="kd_mk" value="<?php echo $d['kd_mk'];
?>">
<input type="text" name="nim" value="<?php echo $d['nim'];
?>">
</td>
</tr>
<tr>
<td>Nilai_Hadir</td>
<td><input type="text" name="nhadir" value="<?php echo
$d['nhadir']; ?>"></td>
</tr>
<tr>
<td>Nilai_UTS</td>
<td><input type="number" name="nuts" value="<?php echo
$d['nuts']; ?>"></td>
</tr>
<tr>
<td>Nilai_UAS</td>
<td><input type="number" name="nuas" value="<?php echo
$d['nuas']; ?>"></td>
</tr>
<tr>
<td>Nilai_Tugas</td>
<td><input type="number" name="ntugas" value="<?php echo
$d['ntugas']; ?>"></td>
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