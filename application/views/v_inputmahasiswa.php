<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Tambah Data Mahasiswa</span>
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
    $update = array('nim' => '', 'id_user' => '', 'nama_mahasiswa' => '', 'prodi_mahasiswa' => '', 'gol_mahasiswa' => '', 'semester' => '');
} else {
    $update_flag = '<input type="hidden" name="updateID" value="'.$update['nim'].'">';
}

?>
              <div class='row'>
                <div class='col-sm-12'>
                  
                  <div class='box'>
                            
                            <form method="post" action="<?php echo site_url('/c_dataMahasiswa/tambah_aksi') ?>">
              <div class="form-group">
             
              </div>
              <div class="form-group">
                <label for="nip">NIM</label>
                <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $update['nim'] ?>" placeholder="NIM">
              </div>
              <div class="form-group">
                <label for="nip">ID User</label>
                <input type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $update['id_user'] ?>" placeholder="Isi Sesuai Nim">
              </div>
              <div class="form-group">
                <label for="nama_dosen">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="<?php echo $update['nama_mahasiswa'] ?>" placeholder="Nama Mahasiswa">
              </div>
              <div class="form-group">
                <label for="nama_judul">Prodi Mahasiswa</label>
                <td><select name="prodi_mahasiswa" class="form-control">
                  <option selected disabled>- Pilih Prodi</option>
                <option value="MIF">MIF</option>
                <option value="TIF">TIF</option>
                <option value="TKK">TKK</option>
              </select>
                </td>
              </div>
              <div class="form-group">
               <label for="prodi_dosen">Golongan</label>
               <td><select name="gol_mahasiswa" class="form-control">
                <option selected disabled>- Pilih Golongan</option>
               <option value="A">A</option>
               <option value="B">B</option>
               <option value="C">C</option>
			   <option value="D">D</option>
             </select>
                </td>
              </div>
			  <div class="form-group">
                <label for="nama_dosen">Semester</label>
                <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $update['semester'] ?>" placeholder="Semester">
              </div>
              <?php if (isset($update_flag)) { 
                  echo $update_flag; 
                } ?>
              <button type="submit" class="btn btn-primary">Save</button>
              <a class="btn btn-primary" href="<?php echo site_url('/c_dataMahasiswa') ?>">Batal</a>
            </form>
              
                    </div>
                  
                </div>
              </div>
