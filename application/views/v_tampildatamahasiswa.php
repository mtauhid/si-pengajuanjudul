<!DOCTYPE html>
<html>
<head>
	<title>DATA MAHASISWA </title>
</head>
<body>
	<center><h1>DATA MAHASISWA YANGMENGIKUTI TUGAS AKHIR</h1></center>
	<center><?php echo anchor('c_dataMahasiswa/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>NAMA MAHASISWA</th>
			<th>GOLONGAN</th>
			<th>PRODI</th>
			<th>SEMESTER</th>
			
			<th colspan="2">ACTION</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tb_mahasiswa as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->nama_mahasiswa ?></td>
			<td><?php echo $u->gol_mahasiswa ?></td>
			<td><?php echo $u->prodi_mahasiswa ?></td>
			<td><?php echo $u->semester ?></td>
			<td>
			      <?php echo anchor('c_dataMahasiswa/edit/'.$u->nim,'EDIT'); ?>
                  
			</td>
			<td><?php echo anchor('c_dataMahasiswa/hapus/'.$u->nim,'HAPUS'); ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>