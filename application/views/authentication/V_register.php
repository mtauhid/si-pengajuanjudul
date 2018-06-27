<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  
<!-- Mirrored from www.bublinastudio.com/flattybs3/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 12:20:18 GMT -->
<head>
    <title>SI PENGAJUAN JUDUL TUGAS AKHIR</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='<?php echo base_url(); ?>assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='<?php echo base_url(); ?>assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='<?php echo base_url(); ?>assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='<?php echo base_url(); ?>assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='<?php echo base_url(); ?>assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='<?php echo base_url(); ?>assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="<?php echo base_url(); ?>assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="<?php echo base_url(); ?>assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="<?php echo base_url(); ?>assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <link href="<?php echo base_url(); ?>assets/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
  <body class='contrast-red login contrast-background'>
    <div class='middle-container'>
      <div class='middle-row'>
        <div class='middle-wrapper'>
          <div class='login-container-header'>
            <div class='container'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='text-center'>
                    <h3>SITEM INFORMASI PENGAJUAN JUDUL TUGAS AKHIR</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='login-container'>
            <div class='container'>
              <div class='row'>
                <div class='col-sm-4 col-sm-offset-4'>
                  <h1 class='text-center title'>Daftar</h1>
                  <form action='<?php echo site_url('authentication/register') ?>' method='post'>
                    <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <input value="<?php echo set_value('username'); ?>" placeholder="NIP / NIM" class="form-control" name="username" type="text" />
                        <i class='icon-lock text-muted'></i>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <input value="<?php echo set_value('name'); ?>" placeholder="Nama" class="form-control" name="name" type="text" />
                        <i class='icon-user text-muted'></i>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='controls'>
                        <select class="form-control" name="prodi">
                            <option disabled selected>- Pilih Prodi</option>
                            <option value="MIF">MIF</option>
                            <option value="TIF">TIF</option>
                            <option value="TKK">TKK</option>
                        </select>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='controls'>
                        <select class="form-control" name="golongan">
                            <option disabled selected>- Pilih Golongan</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <input value="<?php echo set_value('semester'); ?>" placeholder="Semester" class="form-control" name="semester" type="text" />
                        <i class='icon-user text-muted'></i>
                      </div>
                    <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <input value="<?php echo set_value('password'); ?>" placeholder="Password" class="form-control" name="password" type="text" />
                        <i class='icon-lock text-muted'></i>
                      </div>
                    </div>
                    <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <input value="<?php echo set_value('password_conf'); ?>" placeholder="Confirm Password" class="form-control" name="password_conf" type="text" />
                        <i class='icon-lock text-muted'></i>
                      </div>
                    </div>
                    <div class='checkbox'>
                      <label for='agreement'>
                        <input id='agreement' name='agreement' type='checkbox' value='1'>
                        I accept
                        <a class='text-contrast' href='#'>user agreements</a>
                      </label>
                    </div>
                    <button name="btnSubmit" class='btn btn-block'>Sign up</button>
                  </form>
                  <div class='text-center'>
                    <hr class='hr-normal'>
                    <a href='<?php echo base_url('authentication/auth/login')?>'>
                      <i class='icon-chevron-left'></i>
                      Kembali ke Login
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='login-container-footer'>
            <div class='container'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='text-center'>
                    <a href='forgot_password.html'>
                      <i class='icon-lock'></i>
                      Forgot your password?
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / jquery [required] -->
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="<?php echo base_url(); ?>assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="<?php echo base_url(); ?>assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="<?php echo base_url(); ?>assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="<?php echo base_url(); ?>assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="<?php echo base_url(); ?>assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    <script src="<?php echo base_url(); ?>assets/javascripts/demo.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    
    <!-- / END - page related files and scripts [optional] -->
  </body>

<!-- Mirrored from www.bublinastudio.com/flattybs3/sign_up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 12:20:18 GMT -->
</html>