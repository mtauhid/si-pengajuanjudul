<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA</title>
</head>
<body>
	<center>
		<h1>Edit Data</h1>
	</center>
	<?php foreach($tb_mahasiswa as $u){ ?>
	<form action="<?php echo base_url(). 'c_dataMahasiswa/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $u->nim ?>">
					<input type="text" name="nim" value="<?php echo $u->nim ?>">
				</td>
			</tr>
			<tr>
				<td>NAMA MAHASISWA</td>
				<td><input type="text" name="nama_mahasiswa" value="<?php echo $u->nama_mahasiswa ?>"></td>
			</tr>
			<tr>
				<td>GOLONGAN</td>
				<td>
					<input type="radio" name="gol_mahasiswa" value="A">A
					<input type="radio" name="gol_mahasiswa" value="B">B
					<input type="radio" name="gol_mahasiswa" value="C">C
					<input type="radio" name="gol_mahasiswa" value="D">D
				</td>
			</tr>
			<tr>
				<td>PRODI</td>
				<td><select name="prodi_mahasiswa">
				<option value="MIF">MIF</option>
				<option value="TIF">TIF</option>
				<option value="TKK">TKK</option>
                </td>
			</tr>
			 <tr>
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>			 
				
		</table>
	</form>	
	<?php } ?>
</body>
</html>