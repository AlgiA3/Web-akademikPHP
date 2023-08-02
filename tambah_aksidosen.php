<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
// menginput data ke database
mysqli_query($koneksi,"insert into dosen
values('','$kd_dosen','$nama_dosen','$email','$no_hp')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>