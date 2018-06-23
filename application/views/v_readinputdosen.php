<?php
/**
 * View untuk menampilkan daftar/list data (Read)
 * beserta dengan form yang memungkinkan pencarian data spesifik dengan kata kunci
 * 
 */
?>
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
            <th>Nip</th><th>Nama Dosen</th><th>Prodi Dosen</th><th>Jabatan</th>
            <th style="width: 1%;"> </th><th style="width: 1%;"> </th>
        </tr>
        <?php foreach ($result as $r) {
            echo '<tr>';
            echo '<td>'.$r['nip'].'</td><td>'.$r['nama_dosen'].'</td><td>'.$r['prodi_dosen'].'</td><td>'.$r['level_dosen'].'</td>';
            echo '<td><a href="'.site_url('/c_inputdosen/v_updateinputdosen/'.$r['nip']).'" class="btn btn-primary">Edit</a></td>';
            echo '<td><a href="'.site_url('/c_inputdosen/v_deleteinputdosen/'.$r['nip']).'" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>