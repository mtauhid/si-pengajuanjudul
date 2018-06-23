<?php
/**
 * View untuk form penambahan (Create) data dan sekaligus pengubahan (Update) data
 * 
 */
// periksa apakah kita sedang dalam mode 'Update'
if (!isset($update)) {
    $update = array('nip' => '', 'nama_dosen' => '', 'prodi_dosen' => '', 'level_dosen' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['nip'].'">';
}
?>
<br/>
<div class="container">

    <?php if (isset($update_flag)) { 
        echo '<div class="alert alert-info">Anda akan mengubah data dosen <strong>'.$update['nama_dosen'].'</strong></div>';
      } ?>
    <div class="card">
        
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/c_inputdosen/save') ?>">
              <div class="form-group">
             
              </div>
              <div class="form-group">
                <label for="nip">Nip</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $update['nip'] ?>" placeholder="Nip">
              </div>
              <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?php echo $update['nama_dosen'] ?>" placeholder="Nama Dosen">
              </div>
              <div class="form-group">
                <label for="nama_judul">Prodi Dosen</label>
                <td><select name="prodi_dosen">
                  <option selected disabled>- Pilih Prodi</option>
                <option value="MIF">MIF</option>
                <option value="TIF">TIF</option>
                <option value="TKK">TKK</option>
              </select>
                </td>
              </div>
              <div class="form-group">
               <label for="prodi_dosen">Hak Akses Dosen</label>
               <td><select name="level_dosen">
                <option selected disabled>- Hak Akses Dosen</option>
               <option value="DOSEN">DOSEN</option>
               <option value="REVIEWER">REVIEWER</option>
               <option value="KORDINATOR">KORDINATOR</option>
             </select>
                </td>
              </div>
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>