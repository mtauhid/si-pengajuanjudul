<br/>
<div class="container">
  <div class="card">
        <div class="card-body">
            <form method="get" action="<?php echo site_url('/c_inputdosen/') ?>" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Kata Kunci Pencarian">
                  </div>  
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <br/>

  <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
    <table class="table table-bordered">
      <tr>
          <th style="text-align: center;">NIP</th>
          <th>Nama Dosen</th>
          <th style="text-align: center;">Prodi Dosen</th>
          <th colspan="2" style="text-align: center;width: 10px">Hak Akses</th>
      </tr>
      <?php
        $no=1;
        foreach($dosen as $b){
      ?>
        <tr>
          <td style="text-align: center;"><?php echo $b->nip ?></td>
          <td><?php echo $b->nama_dosen ?></td>
          <td style="text-align: center;"><?php echo $b->prodi_dosen ?></td>
          <td style="background-color: #f1f1f1;text-align: center;"><?php echo $b->level_dosen ?></td>
          <td style="text-align: center;">
            <a href="<?php echo site_url('/c_hakAksesDosen/editHakAksesDosen/'.$b->nip)?>" class="btn btn-primary">Ubah</a>
          </td>
          </tr>
        <?php
          }
        ?>
    </table>
