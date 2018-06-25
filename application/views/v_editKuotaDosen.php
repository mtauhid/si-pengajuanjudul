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
            <form method="post" action="<?php echo site_url('/c_kuotaDosen/update') ?>">
            	<div class="form-group">
               		<label for="prodi_dosen">Hak Akses Dosen</label>
               		<td>
               			<input type="hidden" name="nip" value="<?php echo $u->nip?>">
               			<input class="form-control" type="text" name="kuota" value="<?php echo $u->kuota?>">
                	</td>
              	</div>
              	<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a class="btn btn-primary" href="<?php echo site_url('/c_kuotaDosen') ?>">Batal</a>
            </form>
        </div>
    </div>
<?php } ?>
</div>