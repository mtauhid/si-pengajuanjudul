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
 * View untuk proses konfirmasi penghapusan data (Delete)
 * 
 */
if (!isset($update)) {
    $update = array('id_judul' => '', 'nip' => '','nim' => '', 'nama_judul' => '', 'ringkasan' => '','pembagian_tugas' => '','pengerjaan' => '','status' => '','komentar' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['id_judul'].'">';
}
?>
<br />
<div class="container">s

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('c_inputjudulmhs/real_delete') ?>">
                <p>Apakah anda yakin ingin menghapus user <strong><?php echo $v_deleteinputjudulmhs['id_judul'] ?></strong></p>
                <input type="hidden" name="id_judul" value="<?php echo $v_deleteinputjudulmhs['id_judul'] ?>">
                <a class="btn btn-primary" href="<?php echo site_url('c_inputjudulmhs/') ?>">Batal</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>

</div>