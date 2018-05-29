<!DOCTYPE html>
<html>
<head>
	<title>INPUT DOSEN</title>
</head>
<body>
	<center>
		<h1>INPUT JUDUL OLEH DOSEN</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($tb_dosen as $u){ ?>
	<form action="<?php echo base_url(). 'dosen/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIP</td>
				<td>
					<input type="hidden" name="nip" value="<?php echo $u->nip ?>">
					<input type="text" name="nip" value="<?php echo $u->nip ?>">
				</td>
			</tr>
			<tr>
				<td>NAMA DOSEN</td>
				<td><input type="text" name="nama_dosen" value="<?php echo $u->nama_dosen ?>"></td>
			</tr>
			<tr>
				<td>PRODI DOSEN</td>
				<td><input type="text" name="prodi_dosen" value="<?php echo $u->prodi_dosen ?>"></td>
			</tr>
			<tr>
				<td>JABATAN DOSEN</td>
				<td><input type="text" name="prodi_dosen" value="<?php echo $u->prodi_dosen ?>"></td>
			</tr>
			 <tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>