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
	<form action="<?php echo base_url(). 'dosenbaru/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>