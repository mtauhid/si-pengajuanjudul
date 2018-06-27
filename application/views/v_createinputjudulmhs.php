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
    $update = array('id_judul' => '', 'nip' => '','nim' => '', 'nama_judul' => '', 'ringkasan' => '','pembagian_tugas' => '','pengerjaan' => '','status' => '','komentar' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['id_judul'].'">';
}
?>
              <div class='row'>
                <div class='col-sm-12'>
                  
                  <div class='box'>
                            
                            <form method="post" action="<?php echo site_url('/c_inputjudulmhs/save') ?>">
              <div class="form-group">
             
              </div>
              <div class="form-group">
                <label for="id_judul">ID Judul</label>
                <input type="text" class="form-control" name="id_judul" id="id_judul" value="<?php echo $update['id_judul'] ?>" placeholder="Masukkan id Judul">
              </div>
              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?php echo $update['nip'] ?>" placeholder="Masukkan nip">
              </div>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $update['nim'] ?>" placeholder="Masukkan nim">
              </div>
              <div class="form-group">
                <label for="nama_judul">Judul</label>
                <input type="text" class="form-control" name="nama_judul" id="nama_judul" value="<?php echo $update['nama_judul'] ?>" placeholder="Masukkan Judul">
              </div>
              <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <input type="ringkasan" class="form-control" name="ringkasan" id="ringkasan" value="<?php echo $update['ringkasan'] ?>" placeholder="Masukkan Ringkasan">
              </div>
              <div class="form-group">
                <label for="pembagian_tugas">Pembagian Tugas</label>
                <input type="text" class="form-control" name="pembagian_tugas" id="pembagian_tugas" value="<?php echo $update['pembagian_tugas'] ?>" placeholder="Pembagian Tugas">
              </div>
              <div class="form-group">
                <label for="pengerjaan">Pengerjaan</label>
                <input type="text" class="form-control" name="pengerjaan" id="pengerjaan" value="<?php echo $update['pengerjaan'] ?>" placeholder="pengerjaan">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" id="status" value="<?php echo $update['status'] ?>" placeholder="status">
              </div>
              <div class="form-group">
                <label for="komentar">Komentar</label>
                <input type="text" class="form-control" name="komentar" id="komentar" value="<?php echo $update['komentar'] ?>" placeholder="komentar">
              </div>
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
              <a class="btn btn-primary" href="<?php echo site_url('/c_inputjudulmhs') ?>">Batal</a>
            </form>
              
                    </div>
                  
                </div>
              </div>

