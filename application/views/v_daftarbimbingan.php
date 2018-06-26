<html>
  <head>
    <title>Daftar Mahasiswa memilih sebagai pembimbing || SITA </title>
  </head>
  <body>
     
	  <br>
	  <br>
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>aksi</th>
			<th>NIP</th>
			<th>NIM</th>
			<th>Judul</th>
			<th>Ringkasan</th>
			<th>Pembagian Tugas</th>
			<th>Pengerjaan</th>
			<th>Status</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td>
			      <?php echo anchor('dosen/bimbingan/terima/'.$u->id,'terima'); ?>
                  <?php echo anchor('dosen/bimbingan/tolak/'.$u->id,'tolak'); ?>
			</td>
			
			<td><?php echo $u->id_judul ?></td>
			<td><?php echo $u->nip?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->nama_judul ?></td>
			<td><?php echo $u->ringkasan ?></td>
			<td><?php echo $u->pembagian_tugas ?></td>
			<td><?php echo $u->pengerjaan ?></td>
			<td><?php echo $u->status ?></td>
	
			
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
  
  </body>
</html>
