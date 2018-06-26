<?php
/**
 * View untuk form penambahan (Create) data dan sekaligus pengubahan (Update) data
 * 
 */
// periksa apakah kita sedang dalam mode 'Update'
if (!isset($update)) {
    $update = array('id_judul' => '', 'id_dosen' => '','id_mahasiswa' => '', 'nama_judul' => '', 'ringkasan' => '','pembagian_tugas' => '','pengerjaan' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['id_judul'].'">';
}
?>
<br/>
<div class="container">

    <?php if (isset($update_flag)) { 
        echo '<div class="alert alert-info">Anda akan mengubah data user <strong>'.$update['nama_judul'].'</strong></div>';
      } ?>
    <div class="card">
        
        <div class="card-body">
            <form method="post" action="<?php echo site_url('si-pengajuanjudul/c_inputjudulmhs/save') ?>">
              <div class="form-group">
             
              </div>
              <div class="form-group">
                <label for="id_judul">ID Judul</label>
                <input type="text" class="form-control" name="id_judul" id="id_judul" value="<?php echo $update['id_judul'] ?>" placeholder="Masukkan id Judul">
              </div>
              <div class="form-group">
                <label for="id_dosen">ID dosen</label>
                <input type="text" class="form-control" name="id_dosen" id="id_dosen" value="<?php echo $update['id_dosen'] ?>" placeholder="Masukkan id dosen">
              </div>
              <div class="form-group">
                <label for="id_mahasiswa">ID Mahasiswa</label>
                <input type="text" class="form-control" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $update['id_mahasiswa'] ?>" placeholder="Masukkan id mahasiswa">
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
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
              <a class="btn btn-primary" href="<?php echo site_url('si-pengajuanjudul/c_inputjudulmhs') ?>">Batal</a>
            </form>
        </div>
    </div>

</div>