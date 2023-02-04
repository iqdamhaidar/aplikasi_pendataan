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