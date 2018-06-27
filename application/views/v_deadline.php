<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>DEADLINE</span>
                    </h1>
                    </div>
                </div>
              </div>


			<a class="btn btn-primary" href="<?php echo site_url('c_deadline/v_inputdeadline') ?>">Tambah</a>
            <br>
            <br>
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
            <th>Nama Deadline</th><th>Tanggal Awal</th><th>Tanggal Akhir</th>
            <th style="width: 1%;"> </th><th style="width: 1%;"> </th>
        </tr>
        <?php foreach ($deadline as $r) {
            echo '<tr>';
            echo '<td>'.$r['nama_deadline'].'</td><td>'.$r['tanggal_awal'].'</td><td>'.$r['tanggal_akhir'].'</td>';
            echo '<td><a href="'.site_url('/c_deadline/v_updatedeadline/'.$r['id_deadline']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('/c_deadline/v_deletedeadline/'.$r['id_deadline']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>

                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>