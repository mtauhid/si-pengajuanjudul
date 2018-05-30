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
     <?php 
	$cariid = mysqli_query("select max(id_judul) from tb_rekomendasijudul;1") or die (mysqli_error());
    $dataid = mysqli_fetch_array($cariid);
     if ($dataid) {
    	$nilaiid = substr($dataid[0], 1);
    	$id = (int) $nilaiid;
    	$id = $id + 1 ;
    	$hasilid = "P".str_pad($id, 3, "0", STR_PAD_LEFT);
    } else {
    	$hasilid = "P001";
    }
	?>

	<form action="<?php echo base_url(). 'c_inputjuduldosen/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
	
			<tr>
				<td>ID JUDUL</td>
				<td><input type="text" name="id_judul" value="<?php echo $hasilid?>"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td>JUDUL TUGAS AHIR</td>
				<td><input type="text" name="nama_judul"></td>
				
			</tr>
			<tr>
				<td>KUOTA MAHASISWA</td>
				<td><input type="text" name="kuota"></td>
				
			</tr>
			 <tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>