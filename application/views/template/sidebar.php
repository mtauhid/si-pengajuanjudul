<div id='wrapper'>
      <div id='main-nav-bg'></div>
      <nav id='main-nav'>
        <div class='navigation'>
          <ul class='nav nav-stacked'>
            <?php
              if($this ->session ->userdata('level') == "Koordinator"){
            ?>
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
                <li class=''>
                  <a href='<?php echo site_url('c_hasilreview') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Review Judul</span>
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
                  <a href='<?php echo site_url('/c_dataMahasiswa') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Data Mahasiswa</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_dataMahasiswa/tambah') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Tambah Data Mahasiswa</span>
                  </a>
                </li>
				<li class=''>
                  <a href='widgets.html'>
                    <i class='icon-caret-right'></i>
                    <span>Pengajual Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo base_url("c_inputjudulmhs"); ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Pengajual Judul Final</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=''>
              <a href='<?php echo base_url("c_hakAksesDosen"); ?>'>
                <i class='icon-lock'></i>
                <span>Hak Akses Dosen</span>
              </a>
            </li>
            <li class=''>
              <a href='<?php echo base_url("c_kuotaDosen"); ?>'>
                <i class='icon-list'></i>
                <span>Kuota Dosen</span>
              </a>
            </li>
            <li class=''>
              <a href='<?php echo base_url("c_deadline"); ?>'>
                <i class='icon-bell'></i>
                <span>Deadline</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Laporan</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='<?php echo site_url('/c_laporan') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Judul Mahasiswa</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_laporanJudulFix') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Judul Mahasiswa FInal</span>
                  </a>
                </li>
                <li class=''>
                  <a href='c_daftarbimbingan'>
                    <i class='icon-caret-right'></i>
                    <span>Daftar Bimbingan</span>
                  </a>
                </li>
                <li class=''>
                  <a href='c_buktibimbingan'>
                    <i class='icon-caret-right'></i>
                    <span>Kartu Bimbingan</span>
                  </a>
                </li>
              </ul>
            </li>


          <?php }else if($this ->session ->userdata('level') == "Dosen"){ ?>


            <li class='active'>
              <a href='<?php echo site_url('Dashboard') ?>'>
                <i class='icon-dashboard'></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Judul</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='#'>
                    <i class='icon-caret-right'></i>
                    <span>Daftar Judul</span>
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
            <li class=''>
              <a href='c_statistik'>
                <i class='icon-bar-chart'></i>
                <span>Statistik</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Laporan</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='<?php echo site_url('/c_laporan') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Judul Mahasiswa</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_laporanJudulFix') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Judul Mahasiswa Final</span>
                  </a>
                </li>
                <li class=''>
                  <a href='c_daftarbimbingan'>
                    <i class='icon-caret-right'></i>
                    <span>Daftar Bimbingan</span>
                  </a>
                </li>
                <li class=''>
                  <a href='c_buktibimbingan'>
                    <i class='icon-caret-right'></i>
                    <span>Kartu Bimbingan</span>
                  </a>
                </li>
              </ul>
            </li>
            <?php }else if($this ->session ->userdata('level') == "Reviewer"){ ?>


            <li class='active'>
              <a href='<?php echo site_url('Dashboard') ?>'>
                <i class='icon-dashboard'></i>
                <span>Dashboard</span>
              </a>
            </li>
              <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Judul</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='<?php echo site_url('c_review') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Review Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('c_inputjudulmhs') ?>')>
                    <i class='icon-caret-right'></i>
                    <span>Daftar Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('c_rekomendasijudul') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Rekomendasi Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_inputrekomendasijudul/v_createinputrekomendasi') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Tambah Rekomendasi Judul</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=''>
              <a href='c_statistik'>
                <i class='icon-bar-chart'></i>
                <span>Statistik</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Laporan</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='<?php echo site_url('/c_laporan') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Judul Mahasiswa</span>
                  </a>
                </li>
                <li class=''>
                  <a href='<?php echo site_url('/c_laporanJudulFix') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Judul Mahasiswa FInal</span>
                  </a>
                </li>
                <li class=''>
                  <a href='#'>
                    <i class='icon-caret-right'></i>
                    <span>Daftar Bimbingan</span>
                  </a>
                </li>
                <li class=''>
                  <a href='#'>
                    <i class='icon-caret-right'></i>
                    <span>Kartu Bimbingan</span>
                  </a>
                </li>
              </ul>
            </li>

            <?php }else if($this ->session ->userdata('level') == "Mahasiswa"){ ?>


            <li class='active'>
              <a href='<?php echo site_url('Dashboard') ?>'>
                <i class='icon-dashboard'></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-user'></i>
                <span>Pengajuan Judul</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='<?php echo site_url('c_inputjudulmhs') ?>'>
                    <i class='icon-caret-right'></i>
                    <span>Pengajual Judul</span>
                  </a>
                </li>
                <li class=''>
                  <a href='#'>
                    <i class='icon-caret-right'></i>
                    <span>Pengajual Judul Final</span>
                  </a>
                </li>
              </ul>
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
            <?php } ?>
          </ul>
        </div>
      </nav>