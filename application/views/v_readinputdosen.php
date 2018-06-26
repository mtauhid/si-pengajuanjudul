<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Data Dosen</span>
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
                    <div class='box-content box-no-padding'>
                      <div class='responsive-table'>
                        <div class='scrollable-area'>
                          <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                              <tr>
                                <th>Nip</th><th>ID User</th><th>Nama Dosen</th><th>Prodi Dosen</th><th>Jabatan</th>
            <th colspan="2" style="width: 1%;"> </th>
                              </tr>
                            </thead>
                            <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['nip'].'</td><td>'.$r['id_user'].'</td><td>'.$r['nama_dosen'].'</td><td>'.$r['prodi_dosen'].'</td><td>'.$r['level_dosen'].'</td>';
            echo '<td><a href="'.site_url('/c_inputdosen/v_updateinputdosen/'.$r['nip']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('/c_inputdosen/v_deleteinputdosen/'.$r['nip']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>