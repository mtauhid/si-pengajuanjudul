<!DOCTYPE html>
<html>
<head>
	<title>INPUT JUDUL TUGAS AHIR OLEH DOSEN </title>
</head>
<body>
	<center><h1>INPUT JUDUL TUGAS AHIR OLEH DOSEN</h1></center>
	<center><?php echo anchor('dosen/tambah','Tambah Judul'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>NAMA DOSEN</th>
			<th>PRODI DOSEN</th>
			<th>JABATAN DOSEN</th>
			
			<th colspan="2">ACTION</th>
		</tr>
		<?php 
		$no = 1;
		foreach($tb_dosen as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nip ?></td>
			<td><?php echo $u->nama_dosen ?></td>
			<td><?php echo $u->prodi_dosen ?></td>
			<td><?php echo $u->level_dosen ?></td>
			<td>
			      <?php echo anchor('dosen/edit/'.$u->nip,'EDIT'); ?>
                  
			</td>
			<td><?php echo anchor('dosen/hapus/'.$u->nip,'HAPUS'); ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>