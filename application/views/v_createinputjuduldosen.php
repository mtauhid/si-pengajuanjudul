<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Tambah Rekomendasi Judul</span>
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
    $update = array('id_judul' => '', 'nip' => '', 'nama_judul' => '', 'kuota' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['id_judul'].'">';
}
?>
              <div class='row'>
                <div class='col-sm-12'>
                  
                  <div class='box'>
                            
                            <form method="post" action="<?php echo site_url('/c_inputjuduldosen/save') ?>">
              <div class="form-group">
             
              </div>
              <div class="form-group">
                <label for="nip">Nip</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $update['nip'] ?>" placeholder="Nip">
              </div>
              <div class="form-group">
                <label for="nama_judul">Judul</label>
                <input type="nama_judul" class="form-control" name="nama_judul" id="nama_judul" value="<?php echo $update['nama_judul'] ?>" placeholder="Masukkan Judul">
              </div>
              <div class="form-group">
                <label for="kuota">Kuota</label>
                <input type="text" class="form-control" name="kuota" id="kuota" value="<?php echo $update['kuota'] ?>" placeholder="Kuota">
              </div>
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
              <a class="btn btn-primary" href="<?php echo site_url('/c_inputjuduldosen') ?>">Batal</a>
            </form>
              
                    </div>
                  
                </div>
              </div>
