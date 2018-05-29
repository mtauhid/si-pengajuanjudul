<!DOCTYPE html>
<html>
<head>
	<title>INPUT JUDUL TUGAS AHIR OLEH DOSEN</title>
</head>
<body>
	<center>
		<h1>SILAHKAN TAMBAH JUDUL BARU</h1>
		<h3>Tambahkan Judul Baru</h3>
	</center>
	<form action="<?php echo base_url(). 'dosen/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td>NAMA DOSEN</td>
				<td><input type="text" name="nama_dosen"></td>
			</tr>
			<tr>
				<td>PRODI DOSEN</td>
				<td><input type="text" name="prodi_dosen"></td>
			</tr>
			<tr>
				<td>JABATAN</td>
				<td><input type="text" name="level_dosen"></td>
			</tr>
			 <tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>