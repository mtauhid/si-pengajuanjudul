<html>
	<head>
		<title>Dosen</title>
		<style type="text/css">
			table{
				background-color: #F1F1F1;
				margin: auto;
				border-collapse: collapse;
			}
			th{
				background-color:#3d3d3d;
				font-size: 16px;
				font-weight: normal;
				color: #F1F1F1;
				padding: 10px;
			}
			tr,td{
				font-family: Arial;
				color: #000;
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>NIP</th>
				<th>Nama</th>
				<th>Program Studi</th>
				<th colspan="2">Hak Akses</th>
			</tr>
			<?php
				$no=1;
				foreach($buku as $b){
			?>
			<tr>
				<td><?php echo $b->nip ?></td>
				<td><?php echo $b->nama_dosen ?></td>
				<td style="text-align: center;"><?php echo $b->prodi_dosen ?></td>
				<td style="background-color: #e5e5e5;"><?php echo $b->level_dosen ?></td>
				<td style="background-color: #e5e5e5;"><a href="#" style="font-family:Arial; text-decoration:none;font-size:14px;color: #FFF;display: block;background-color: #3d3d3d; padding:5px;">Ubah</a></td>
			</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>