<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_nilai = $_POST['id_nilai'];
$nim = $_POST['nim'];
$kd_mk = $_POST['kd_mk'];
$nhadir = $_POST['nhadir'];
$nuts = $_POST['nuts'];
$nuas = $_POST['nuas'];
$ntugas = $_POST['ntugas'];
// menginput data ke database
mysqli_query($koneksi,"insert into dosen
values('','$id_nilai','$nim','$kd_mk','$nhadir','$nuts','$nuas','$ntugas)");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>