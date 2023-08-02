<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA DOSEN</h2>
<br/>
<a href="tambah_dosen.php">+ TAMBAH DOSEN</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO</th>
<th>Kd_Dosen</th>
<th>Nama</th>
<th>Email</th>
<th>No_Hp</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from dosen");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kd_dosen']; ?></td>
<td><?php echo $d['nama_dosen']; ?></td>
<td><?php echo $d['email']; ?></td>
<td><?php echo $d['no_hp']; ?></td>
<td>
<a href="edit_dosen.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">EDIT</a>
<a href="hapus.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>