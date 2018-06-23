<html>
  <head>
    <title>INPUT DATA MAHASISWA</title>
  </head>
  <body>
    <h1>Data siswa</h1>
    <hr>
    <a href='<?php echo base_url("c_dataMahasiswa/tambah"); ?>'>Tambah Data</a><br><br>
    <table border="1" cellpadding="7">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Golongan</th>
        <th>Prodi</th>
        <th>Semester</th>
        <th colspan="3">Aksi</th>
      </tr>
      <?php
      if( ! empty($c_dataMahasiswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($c_dataMahasiswa as $data){
          echo "<tr>
          <td>".$data->nim."</td>
          <td>".$data->nama_mahasiswa."</td>
          <td>".$data->gol_mahasiswa."</td>
          <td>".$data->prodi_mahasiswa."</td>
          <td>".$data->semester."</td>
          <td><a href='".base_url("mahasiswa/ubah/".$data->nim)."'>Ubah</a></td>
          <td><a href='".base_url("mahasiswa/hapus/".$data->nim)."'>Hapus</a></td>
		  <td><a href='".base_url("mahasiswa/inputjudul/".$data->nim)."'>InputJudul</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>
