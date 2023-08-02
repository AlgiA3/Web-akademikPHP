<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA NILAI</h2>
<br/>
<a href="tambah_nilai.php">+ TAMBAH NILAI</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO</th>
<th>ID_Nilai</th>
<th>NIM</th>
<th>Kd_MK</th>
<th>Nilai_Hadir</th>
<th>Nilai_UTS</th>
<th>Nilai_UAS</th>
<th>Nilai_Tugas</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from nilai");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['id_nilai']; ?></td>
<td><?php echo $d['nim']; ?></td>
<td><?php echo $d['kd_mk']; ?></td>
<td><?php echo $d['nhadir']; ?></td>
<td><?php echo $d['nuts']; ?></td>
<td><?php echo $d['nuas']; ?></td>
<td><?php echo $d['ntugas']; ?></td>
<td>
<a href="edit_nilai.php?id_nilai=<?php echo $d['id_nilai']; ?>">EDIT</a>
<a href="hapus.php?id_nilai=<?php echo $d['id_nilai']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
