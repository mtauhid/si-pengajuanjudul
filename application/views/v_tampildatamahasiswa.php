<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Data Mahasiswa</span>
                    </h1>
                    </div>
                </div>
              </div>

            <div class='row'>
                <div class='col-sm-12'>
                    <div class='box-content box-no-padding'>
                      <div class='responsive-table'>
                        <div class='scrollable-area'>
                          <table class='data-table table table-bordered table-striped' style='margin-bottom:0;'>
                            <thead>
                              <tr>
                                <th>No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Golongan</th>
								<th>Prodi</th>
								<th>Semester</th>
								
								<th colspan="2" style="text-align: center;width: 10px;">Aksi</th>
                              </tr>
                            </thead>
                            <?php
                              $no=1;
                              foreach($tb_mahasiswa as $u){
                            ?>
                            <tbody>
                              <tr>
                                <td><?php echo $no++ ?></td>
								<td><?php echo $u->nim ?></td>
								<td><?php echo $u->nama_mahasiswa ?></td>
								<td><?php echo $u->gol_mahasiswa ?></td>
								<td><?php echo $u->prodi_mahasiswa ?></td>
								<td><?php echo $u->semester ?></td>
                                <td style="background-color: #f1f1f1;width: 10px;">
                                <div class='text-center'>
                                  <a href="<?php echo site_url('c_dataMahasiswa/edit/'.$u->nim)?>" class="btn btn-danger">Edit</a> 
								</div>
                                </td>
                                <td style="background-color: #f1f1f1;width: 10px;">
                                	<div class='text-center'>
                                    <a href="<?php echo site_url('c_dataMahasiswa/v_deleteinputmahasiswa/'.$u->nim)?>" class="btn btn-danger">Hapus</a>
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