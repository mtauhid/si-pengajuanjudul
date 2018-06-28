<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Daftar Judul</span>
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
      <th>Opsi</th>
      <th>NIP</th>
      <th>NIM</th>
      <th>Judul</th>
      <th>Ringkasan</th>
      <th>Pembagian Tugas</th>
      <th>Pengerjaan</th>
      <th>Status</th>
      <th>Masukan </th
  
            <th colspan="2" style="width: 1%;"> </th>
                              </tr>
                            </thead>
                            <?php 
    $no = $this->uri->segment('3') + 1;
    foreach($tb_judul as $u){ 
    ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
      <td>
            <?php echo anchor('c_review/terima/'.$u->id_judul,'terima'); ?>
                  <?php echo anchor('c_review/tolak/'.$u->id_judul,'tolak'); ?>
      </td>
      <td><?php echo $u->nip?></td>
      <td><?php echo $u->nim ?></td>
      <td><?php echo $u->nama_judul ?></td>
      <td><?php echo $u->ringkasan ?></td>
      <td><?php echo $u->pembagian_tugas ?></td>
      <td><?php echo $u->pengerjaan ?></td>
      <td><?php echo $u->status ?></td>
      <td><?php echo $u->komentar ?></td>

                            </tr>
                          <?php } ?>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>                          