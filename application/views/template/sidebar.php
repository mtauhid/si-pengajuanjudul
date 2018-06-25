<div id='wrapper'>
      <div id='main-nav-bg'></div>
      <nav id='main-nav'>
        <div class='navigation'>
          <ul class='nav nav-stacked'>
            <li class='active'>
              <a href='<?php echo site_url('Dashboard') ?>'>
                <i class='icon-dashboard'></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class=''>
                      <a class="dropdown-collapse" href="#"><i class='icon-user'></i>
              <span>Dosen</span>
              <i class='icon-angle-down angle-down'></i>
              </a>
      
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='<?php echo site_url('c_inputdosen') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Data Dosen</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_inputdosen/v_createinputdosen') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Tambah Data Dosen</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('c_inputjuduldosen') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Rekomendasi Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_inputjuduldosen/v_createinputjuduldosen') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Tambah Rekomendasi Judul</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Mahasiswa</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='ui_elements.html'>
                    <i class='icon-caret-right'></i>
                    <span>Data Mahasiswa</span>
                  </a>
                </li>
                <li class=''>
                  <a href='widgets.html'>
                    <i class='icon-caret-right'></i>
                    <span>Pengajuan Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='widgets.html'>
                    <i class='icon-caret-right'></i>
                    <span>Pengajual Judul Final</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=''>
              <a href='<?php echo base_url("c_hakAksesDosen"); ?>'>
                <i class='icon-bar-chart'></i>
                <span>Hak Akses Dosen</span>
              </a>
            </li>
            <li class=''>
              <a href='<?php echo base_url("c_kuotaDosen"); ?>'>
                <i class='icon-bar-chart'></i>
                <span>Kuota Dosen</span>
              </a>
            </li>
            <li class=''>
              <a href='buttons_and_icons.html'>
                <i class='icon-cog'></i>
                <span>Pengaturan</span>
              </a>
            </li>
            
            <li class=''>
              <a href='c_statistik'>
                <i class='icon-bar-chart'></i>
                <span>Statistik</span>
              </a>
            </li>
            <li class=''>
              <a href='tables.html'>
                <i class='icon-file'></i>
                <span>Laporan</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>