<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA MATAKULIAH</h2>
<br/>
<a href="tambah_mk.php">+ TAMBAH MATAKULIAH</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO</th>
<th>Kd_MK</th>
<th>Nama_MK</th>
<th>SKS</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from matakuliah");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kd_mk']; ?></td>
<td><?php echo $d['nama_mk']; ?></td>
<td><?php echo $d['sks']; ?></td>
<td>
<a href="edit_mk.php?kd_mk=<?php echo $d['kd_mk']; ?>">EDIT</a>
<a href="hapus.php?kd_mk=<?php echo $d['kd_mk']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>