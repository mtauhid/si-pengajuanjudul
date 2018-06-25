<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Rekomendasi Judul</span>
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
            <th>Id</th><th>Nip</th><th>Judul</th><th>Kuota</th>
            <th style="width: 1%;"> </th><th style="width: 1%;"> </th>
        </tr>
        <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['id_judul'].'</td><td>'.$r['nip'].'</td><td>'.$r['nama_judul'].'</td><td>'.$r['kuota'].'</td>';
            echo '<td><a href="'.site_url('/c_inputjuduldosen/v_updateinputjuduldosen/'.$r['id_judul']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('/c_inputjuduldosen/v_deleteinputjuduldosen/'.$r['id_judul']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              </div>