<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Tambah Data Dosen</span>
                    </h1>
                    </div>
                </div>
              </div>
              <?php
/**
 * View untuk form penambahan (Create) data dan sekaligus pengubahan (Update) data
 * 
 */
// periksa apakah kita sedang dalam mode 'Update'
if (!isset($update)) {
    $update = array('nip' => '', 'id_user' => '', 'nama_dosen' => '', 'prodi_dosen' => '', 'level_dosen' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['nip'].'">';
}

?>
              <div class='row'>
                <div class='col-sm-12'>
                  
                  <div class='box'>
                            
                            <form method="post" action="<?php echo site_url('/c_inputdosen/save') ?>">
              <div class="form-group">
             
              </div>
              <div class="form-group">
                <label for="nip">Nip</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $update['nip'] ?>" placeholder="Nip">
              </div>
              <div class="form-group">
                <label for="nip">ID User</label>
                <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $update['id_user'] ?>" placeholder="Isi Sesuai Nip">
              </div>
              <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?php echo $update['nama_dosen'] ?>" placeholder="Nama Dosen">
              </div>
              <div class="form-group">
                <label for="nama_judul">Prodi Dosen</label>
                <td><select name="prodi_dosen" class="form-control">
                  <option selected disabled>- Pilih Prodi</option>
                <option value="MIF">MIF</option>
                <option value="TIF">TIF</option>
                <option value="TKK">TKK</option>
              </select>
                </td>
              </div>
              <div class="form-group">
               <label for="prodi_dosen">Hak Akses Dosen</label>
               <td><select name="level_dosen" class="form-control">
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
              <a class="btn btn-primary" href="<?php echo site_url('/c_inputdosen') ?>">Batal</a>
            </form>
              
                    </div>
                  
                </div>
              </div>
