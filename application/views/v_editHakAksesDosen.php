<br/>
<?php
foreach($dosen as $u){ 
?>
<div class="container">

    <?php if (isset($u)) { 
        echo '<div class="alert alert-info">Anda akan mengubah data dosen <strong>'.$u->nama_dosen.'</strong></div>';
      } ?>
    <div class="card">
        
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/c_hakAksesDosen/update') ?>">
            	<div class="form-group">
               		<label for="prodi_dosen">Hak Akses Dosen</label>
               		<td>
               			<input type="hidden" name="nip" value="<?php echo $u->nip?>">
               			<select name="level_dosen" class="form-control">
                			<option selected disabled>- Hak Akses Dosen</option>
                			<?php if($u->level_dosen=="Dosen"){?>
               				<option value="<?php echo $u->level_dosen?>" selected><?php echo $u->level_dosen?></option>
               				<option value="Reviewer">Reviewer</option>
               				<option value="Koordinator">Koordinator</option>
               				<?php } else if($u->level_dosen=="Reviewer") {?>
               				<option value="Reviewer">Dosen</option>
               				<option value="<?php echo $u->level_dosen?>" selected><?php echo $u->level_dosen?></option>
               				<option value="Koordinator">Koordinator</option>
               				<?php } else if($u->level_dosen=="Koordinator") {?>
               				<option value="Dosen">Dosen</option>
               				<option value="Reviewer">Reviewer</option>
               				<option value="<?php echo $u->level_dosen?>" selected><?php echo $u->level_dosen?></option>
               				<?php } ?>
             			</select>
                	</td>
              	</div>
              	<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
<?php } ?>
</div>