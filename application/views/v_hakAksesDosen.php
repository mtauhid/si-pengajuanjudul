      <section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              
              <div class='page-header page-header-with-buttons'>
                <h1 class='pull-left'>
                  <i class='icon-dashboard'></i>
                  <span>Hak Akses Dosen</span>
                </h1>
                
              </div>
                <div class='row'>
                  <div class='col-sm-12'>
                      <div class='box-content box-no-padding'>
                        <table class='table table-striped' style='margin-bottom:0;'>
                          <thead>
                            <tr>
                              <th>NIP</th>
                              <th>Nama</th>
                              <th>Program Studi</th>
                              <th colspan="2" width="1%" style="text-align: center;">Hak Akses</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                            $no=1;
                            foreach($dosen as $b){
                          ?>
                          <tr>
                            <td><?php echo $b->nip ?></td>
                            <td><?php echo $b->nama_dosen ?></td>
                            <td><?php echo $b->prodi_dosen ?></td>
                            <td style="background-color: #f1f1f1;text-align: center;"><?php echo $b->level_dosen ?></td>
                            <td style="background-color: #f1f1f1">
                              <div class='text-right'>
                                <a class='btn btn-success btn-sm' href='#'>
                                  Ubah
                                </a>
                              </div>
                            </td>
                           </tr>
                          <?php
                            }
                          ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>