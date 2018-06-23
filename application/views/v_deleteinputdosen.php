<?php
/**
 * View untuk proses konfirmasi penghapusan data (Delete)
 * 
 */
?>
<br />
<div class="container">

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo site_url('/c_inputdosen/real_delete') ?>">
                <p>Apakah anda yakin ingin menghapus user <strong><?php echo $v_deleteinputdosen['nip'] ?></strong></p>
                <input type="hidden" name="nip" value="<?php echo $v_deleteinputdosen['nip'] ?>">
                <a class="btn btn-primary" href="<?php echo site_url('/c_inputdosen/') ?>">Batal</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>

</div>