<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Hapus Rekomendasi Judul</span>
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
                            
                            <form method="post" action="<?php echo site_url('/c_inputjuduldosen/real_delete') ?>">
                <p>Apakah anda yakin ingin menghapus user <strong><?php echo $v_deleteinputjuduldosen['id_judul'] ?></strong></p>
                <input type="hidden" name="id_judul" value="<?php echo $v_deleteinputjuduldosen['id_judul'] ?>">
                <a class="btn btn-primary" href="<?php echo site_url('/c_inputjuduldosen/') ?>">Batal</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
              
                    </div>
                  
                </div>
              </div>

