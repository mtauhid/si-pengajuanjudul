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
				<td>ID USER</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
					<input type="text" name="id_user" value="<?php echo $u->id_user ?>">
				</td>
			</tr>
			<tr>
				<td>NAMA DOSEN</td>
				<td><input type="text" name="nama_dosen" value="<?php echo $u->nama_dosen ?>"></td>
			</tr>
			<tr>
				<td>PRODI DOSEN</td>
				<td><select name="prodi_dosen">
				<option value="MIF">MIF</option>
				<option value="TIF">TIF</option>
				<option value="TKK">TKK</option>
                </td>
			</tr>
			<tr>
				<td>JABATAN</td>
				<td><select name="level_dosen">
				<option value="DOSEN">DOSEN</option>
				<option value="REVIEWER">REVIEWER</option>
				<option value="KORDINATOR">KORDINATOR</option>
                </td>
			</tr>
			 <tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>