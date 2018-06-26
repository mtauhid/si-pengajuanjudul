<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Kuota Dosen</span>
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
                                <th style="text-align: center;">NIP</th>
                                <th>Nama Dosen</th>
                                <th style="text-align: center;">Prodi Dosen</th>
                                <th colspan="2" style="text-align: center;width: 10px">Kuota Dosen</th>
                              </tr>
                            </thead>
                            <?php
                              $no=1;
                              foreach($dosen as $b){
                            ?>
                            <tbody>
                              <tr>
                                <td style="text-align: center;"><?php echo $b->nip ?></td>
                                <td><?php echo $b->nama_dosen ?></td>
                                <td style="text-align: center;"><?php echo $b->prodi_dosen ?></td>
                                <td style="background-color: #f1f1f1;text-align: center;"><?php echo $b->kuota ?></td>
                                <td style="background-color: #f1f1f1;">
                                  <div class='text-center'>
                                    <a href="<?php echo site_url('/c_kuotaDosen/editkuotaDosen/'.$b->nip)?>" class="btn btn-primary">Ubah</a>
                                  </div>
                                </td>
                              </tr>
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