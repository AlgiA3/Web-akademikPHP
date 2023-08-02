<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<h2>CRUD DATA NILAI </h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA NILAI</h3>
<form method="post" action="tambah_aksinilai.php">
<table>
<tr>
<td>NIM</td>
<td><input type="numer" name="nim"></td>
</tr>
<tr>
<td>Kd_MK</td>
<td><input type="text" name="kd_mk"></td>
</tr>
<tr>
<td>Nilai_Hadir</td>
<td><input type="text" name="nhadir"></td>
</tr>
<tr>
<td>Nilai_UTS</td>
<td><input type="text" name="nuts"></td>
</tr>
<tr>
<td>Nilai_UAS</td>
<td><input type="text" name="nuas"></td>
</tr>
<tr>
<td>Nilai_Tugas</td>
<td><input type="text" name="ntugas"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>