<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Hapus Deadline</span>
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
    $update = array('id_deadline' => '', 'nama_judul' => '', 'tanggal_awal' => '', 'tanggal_akhir' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update->id_deadline.'">';
}
?>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                            
                            <form method="post" action="<?php echo site_url('/c_deadline/real_delete') ?>">
                                <p>Apakah anda yakin ingin menghapus deadline <strong><?php echo $v_deletedeadline['id_deadline'] ?></strong></p>
                                <input type="hidden" name="id" value="<?php echo $v_deletedeadline['id_deadline'] ?>">
                                <a class="btn btn-primary" href="<?php echo site_url('/c_deadline/') ?>">Batal</a>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                              
                    </div>
                </div>
              </div>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>