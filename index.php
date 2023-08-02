<!DOCTYPE html>
<html>
<head>
<title>Membuat Halaman Web Dinamis Dengan PHP | AKADEMIK</title>
<!-- menghubungkan dengan file css -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- menghubungkan dengan file jquery -->
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!--
Author : Nama Anda
Site : www.malasngoding.com
-->
<div class="content">
<header>
<h1 class="judul">AKADEMIK </h1>
<h3 class="deskripsi">MEMBUAT WEBSITE DINAMIS AKADEMIK
</h3>
</header>
<div class="menu">
<ul>
<li><a href="index.php?page=home">HOME</a></li>
<li><a href="index.php?page=mahasiswa">MAHASISWA</a></li>
<li><a href="index.php?page=dosen">DOSEN</a></li>
<li><a href="index.php?page=matakuliah">MATAKULIAH</a></li>
<li><a href="index.php?page=nilai">NILAI</a></li>
</ul>
</div>
<div class="badan">
<?php
if(isset($_GET['page'])){
$page = $_GET['page'];
switch ($page) {
    case 'home':
        include "home.php";
        break;
case 'mahasiswa':
include "mahasiswa.php";
break;
case 'dosen':
include "dosen.php";
break;
case 'matakuliah':
include "mk.php";
break;
case 'nilai':
include "nilai.php";
break;
default:
echo "<center><h3>Maaf. Halaman tidak di temukan
!</h3></center>";
break;
} }
else{
include "home.php";
}
?>
</div>
</div>
</body>
</html>