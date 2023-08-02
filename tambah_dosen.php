<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA DOSEN </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA DOSEN</h3>
<form method="post" action="tambah_aksidosen.php">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>No_Hp</td>
<td><input type="number" name="no_hp"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>