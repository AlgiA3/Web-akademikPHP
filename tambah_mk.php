<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA MATAKULIAH </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA MATAKULIAH</h3>
<form method="post" action="tambah_aksimk.php">
<table>
<tr>
<td>Kd_MK</td>
<td><input type="text" name="kd_mk"></td>
</tr>
<tr>
<td>Nama_MK</td>
<td><input type="text" name="nama_mk"></td>
</tr>
<tr>
<td>SKS</td>
<td><input type="number" name="sks"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>