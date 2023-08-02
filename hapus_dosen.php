<?php
include 'koneksi.php';
$kd_dosen = $_GET['kd_dosen'];
mysqli_query($koneksi,"DELETE FROM dosen WHERE kd_dosen='$kd_dosen'")or
die(mysql_error());
header("location:index.php?pesan=hapus");
?>