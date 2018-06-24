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
            <form method="get" action="<?php echo site_url('/c_inputjuduldosen/') ?>" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Kata Kunci Pencarian">
                  </div>  
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>

    <br/>
    <a class="btn btn-primary" href="<?php echo site_url('/c_inputjuduldosen/v_createinputjuduldosen') ?>" class="nav-link">Tambahkan Judul</a>
    <br>
    <br>
    <div class="alert alert-info">Ditemukan data dalam jumlah <strong><?php echo $num_rows ?></strong></div>
    <table class="table table-bordered">
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