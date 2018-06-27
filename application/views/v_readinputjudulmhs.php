<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Hak Akses Mahasiswa</span>
                    </h1>
                    </div>
                </div>
              </div>

            <div class='row'>
                <div class='col-sm-12'>
                    <div class='alert alert-info alert-dismissable'>
                      <a class='close' data-dismiss='alert' href='#'>&times;</a>
                      Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong>
                    </div>
                    <a class="btn btn-primary" href="<?php echo site_url('c_inputjudulmhs/v_createinputjudulmhs') ?>" class="nav-link">Tambahkan Judul</a>
                    <br>
                    <br>
                    <div class='box-content box-no-padding'>
                      <div class='responsive-table'>
                        <div class='scrollable-area'>
                          <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                              <tr>
                                <th>Id Judul</th><th>NIP</th><th>NIM</th><th>Judul</th><th>Ringkasan</th><th>Pembagian Tugas</th><th>Pengerjaan</th><th>Status</th><th>Komentar</th><th>Aksi</th>
                              </tr>
                            </thead>
                            <?php foreach ($result as $r) {?>
                            <tbody>
                              <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['id_judul'].'</td><td>'.$r['nip'].'</td><td>'.$r['nim'].'</td><td>'.$r['nama_judul'].'</td><td>'.$r['ringkasan'].'</td><td>'.$r['pembagian_tugas'].'</td><td>'.$r['pengerjaan'].'</td><td>'.$r['status'].'</td><td>'.$r['komentar'].'</td>';
            echo '<td><a href="'.site_url('c_inputjudulmhs/v_updateinputjudulmhs/'.$r['id_judul']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('c_inputjudulmhs/v_deleteinputjudulmhs/'.$r['id_judul']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>
                            </tbody>
                            <?php
                              }
                            ?>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>