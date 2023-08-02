<?php
include 'koneksi.php';
$kd_mk = $_GET['kd_mk'];
mysqli_query($koneksi,"DELETE FROM matakuliah WHERE kd_mk='$kd_mk'")or
die(mysql_error());
header("location:index.php?pesan=hapus");
?>