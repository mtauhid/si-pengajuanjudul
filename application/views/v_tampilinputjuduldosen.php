<!DOCTYPE html>
<html>
<head>
	<title>INPUT JUDUL TUGAS AHIR OLEH DOSEN </title>
</head>
<body>
	<center><h1>INPUT JUDUL TUGAS AHIR OLEH DOSEN</h1></center>
	<center><?php echo anchor('c_inputjuduldosen/tambah','Tambah Judul'); ?></center>
		<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID JUDUL</th>
		    <th>NIP</th>
		    <th>NAMA JUDUL</th>
		    <th>KUOTA</th>
			
			<th colspan="2">ACTION</th>
		</tr>
		<?php 
		
		foreach($tb_rekomendasijudul as $u){ 
		?>
		<tr>
			 <td><?php echo $u->id_judul ?></td>
		     <td><?php echo $u->nip ?></td>
			 <td><?php echo $u->nama_judul ?></td>
			 <td><?php echo $u->kuota ?></td>
			 <td>
			      <?php echo anchor('c_inputjuduldosen/edit/'.$u->id_judul,'EDIT'); ?>
                  
			</td></tr>
			<tr><td><?php echo anchor('c_inputdosen/hapus/'.$u->id_judul,'HAPUS'); ?></td></tr>
		</tr>
		<?php } ?>
	</table>
</body>
</html>