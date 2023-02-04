<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<h3>daftar peserta</h3>
	<form method="POST" action="proses_admin">
	<fieldset>
		<legend>tambah event</legend>
		<table>
			<tr>
				<td><label>nama :</label></td>
				<td><input type="text" name="nama" placeholder="masukan namaa....."></td>
			</tr>
			<tr>
			<td><label>tangggal:</label></td>
			<td><input type="datte" name="tangggal"></td>
		</tr>
		<tr>
			<td><label>informasi:</label></td>
			<td><textarea name="informasi "clos="20" rows="2" placeholder="tulis disini....."></textarea></td>
		</tr>
		<tr>
			<td><label></label><input type="submit" name="submit" value="masukan"></td>
		</tr>
		</table>
	</fieldset>

</body>
</html>