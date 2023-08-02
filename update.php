<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama',
nim='$nim', alamat='$alamat' where id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
<br/>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
// update data ke database
mysqli_query($koneksi,"update dosen set 
nama_dosen='$nama_dosen', email='$email', no_hp='$no_hp' where kd_dosen='$kd_dosen'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
<br/>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kd_mk = $_POST['kd_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];
// update data ke database
mysqli_query($koneksi,"update matakuliah set nama_mk='$nama_mk',
sks='$sks' where kd_mk='$kd_mk'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
<br/>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id_nilai = $_POST['id_nilai'];
$nim = $_POST['nim'];
$kd_mk = $_POST['kd_mk'];
$nhadir = $_POST['nhadir'];
$nuts = $_POST['nuts'];
$nuas = $_POST['nuasr'];
$ntugas = $_POST['ntugas'];
// update data ke database
mysqli_query($koneksi,"update dosen set 
nim='$nim', kd_mk='$kd_mk', nhadir='$nhadir',nuts='$nuts',nuas='$nuas',ntugas='$ntugas' where id_nilai='$id_nilai'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>