<?php
/**
 * View untuk proses konfirmasi penghapusan data (Delete)
 * 
 */
?>
<br />
<div class="container">s

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('si-pengajuanjudul/c_inputjudulmhs/real_delete') ?>">
                <p>Apakah anda yakin ingin menghapus user <strong><?php echo $v_deleteinputjudulmhs['id_judul'] ?></strong></p>
                <input type="hidden" name="id_judul" value="<?php echo $v_deleteinputjudulmhs['id_judul'] ?>">
                <a class="btn btn-primary" href="<?php echo site_url('si-pengajuanjudul/c_inputjudulmhs/') ?>">Batal</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>

</div>