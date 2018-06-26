<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Hak Akses Dosen</span>
                    </h1>
                    </div>
                </div>
              </div>
              <?php foreach($dosen as $u){?>
              <div class='row'>
                <div class='col-sm-12'>
                  <?php if (isset($u)) { ?>
                  <div class='alert alert-info alert-dismissable'>
                      <a class='close' data-dismiss='alert' href='#'>&times;</a>
                      Anda akan mengubah data dosen <strong><?php echo $u->nama_dosen ?></strong>
                    </div>
                  <?php } ?>
                  <div class='box'>
                            
                            <form action="<?php echo site_url('/c_hakAksesDosen/update') ?>" class="form form-horizontal" style="margin-bottom: 0;" method="post" action="#" accept-charset="UTF-8">
                              <input type="hidden" name="nip" value="<?php echo $u->nip?>">
                              <div class='form-group'>
                                <label class='col-md-2 control-label' for='inputSelect'>Select</label>
                                <div class='col-md-5'>
                                  <select name="level_dosen" class="form-control">
                                    <option selected disabled>- Hak Akses Dosen</option>
                                    <?php if($u->level_dosen=="Dosen"){?>
                                    <option value="<?php echo $u->level_dosen?>" selected><?php echo $u->level_dosen?></option>
                                    <option value="Reviewer">Reviewer</option>
                                    <option value="Koordinator">Koordinator</option>
                                    <?php } else if($u->level_dosen=="Reviewer") {?>
                                    <option value="Reviewer">Dosen</option>
                                    <option value="<?php echo $u->level_dosen?>" selected><?php echo $u->level_dosen?></option>
                                    <option value="Koordinator">Koordinator</option>
                                    <?php } else if($u->level_dosen=="Koordinator") {?>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Reviewer">Reviewer</option>
                                    <option value="<?php echo $u->level_dosen?>" selected><?php echo $u->level_dosen?></option>
                                    <?php }else{ ?>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Reviewer">Reviewer</option>
                                    <option value="Koordinator">Koordinator</option>
                                    <?php }?>
                                  </select>
                                </div>
                              </div>
                              <div class='form-actions form-actions-padding-sm'>
                                <div class='row'>
                                  <div class='col-md-10 col-md-offset-2'>

                
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    <a class="btn btn-primary" href="<?php echo site_url('/c_hakAksesDosen') ?>">Batal</a>
                                  </div>
                                </div>
                              </div>
                      </form>
              
                    </div>
                  
                </div>
                <?php } ?>
              </div>