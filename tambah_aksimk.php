<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kd_mk = $_POST['kd_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
// menginput data ke database
mysqli_query($koneksi,"insert into nilai
values('','$kd_mk','$nama_mk','$sks')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>