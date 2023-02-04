<!DOCTYPE html>
<html>

<?php
include"koneksi.php"
?>


<head>
	<title>admin</title>
</head>
<body>
	<h2>selamt datang dihalaman</h2>
	<hr>
	<h3>daftar event</h3>
	<h4><a href="<h4><a href="form_peserta.php">Daftar Peserta Event</h4></a>
<hr>
<h4><a href="form_admin.php"> Tambah Daftar Event</a></h4>
<p>
	<table border="1" width="40%">
		<tr>
			<td align="center"><strong>NO</strong></td>
			<td align="center"><strong>Nama Event</strong></td>
			<td align="center"><strong>Tanggal Event</strong></td>
			<td align="center"><strong>informasi Event</strong></td>
			<td align="center"><strong>Opsi</strong></td>
		</tr>
<?php
include "koneksi.php";
$tampil = mysqli_query($mysqli, "select * from admin");
$no = 1;
while($hasil = mysqli_fetch_array($tampil)){
?>
<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $hasil['nama']; ?></td>
	<td><?php echo $hasil['tanggal']; ?></td>
	<td><?php echo $hasil['informasi']; ?></td>
	<td align="center">
	<a href="edit.php?id=<?php echo $hasil['id']; ?>">Edit Event|</a>
	<a href="hapus_admin.php?hapus&id=<?php echo $hasil['id']; ?>"> Hapus Event</a>
	</td>
</tr>
<?php
}
?>
	</table>
</p>
<a href="form_login.php"><strong>- Logout</strong></a>
</body>
</html>">


</body>
</html>