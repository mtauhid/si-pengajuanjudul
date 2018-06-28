<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Tambah Deadline</span>
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
    $update = array('id_deadline' => '', 'nama_deadline' => '', 'tanggal_awal' => '', 'tanggal_akhir' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['id_deadline'].'">';
}
?>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>       
                    <form method="post" action="<?php echo site_url('/c_deadline/save') ?>">
              	<div class="form-group">
              </div>
              
              <div class="form-group">
                <label for="nama_deadline">Nama Deadline</label>
                <input type="text" class="form-control" name="nama" id="nama_deadline" value="<?php echo $update['nama_deadline'] ?>" placeholder="nama_deadline">
              </div>

              <div class="form-group">
                <label for="tanggal_awal">Tanggal Awal</label>
                <input type="date" class="form-control" name="tgl_awal" id="tanggal_awal" value="<?php echo $update['tanggal_awal'] ?>" placeholder="tanggal_awal">
              </div>

              <div class="form-group">
                <label for="tanggal_akhir">Tanggal Akhir</label>
                <input type="date" class="form-control" name="tgl_akhir" id="tanggal_akhir" value="<?php echo $update['tanggal_akhir'] ?>" placeholder="tanggal_akhir">
              </div>

              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
              <a class="btn btn-primary" href="<?php echo site_url('/c_deadline') ?>">Batal</a>
            </form>
              
                    </div>
                  
                </div>
              </div>
