<html>
  <head>
    <title>Daftar Hasil || SITA </title>
  </head>
  <body>
     
    <br>
    <br>
  
  <table style="margin:20px auto;" border="1">
    <tr>
      <th>No</th>
      <th>aksi</th>
      <th>NIP</th>
      <th>NIM</th>
      <th>Judul</th>
      <th>Ringkasan</th>
      <th>Pembagian Tugas</th>
      <th>Pengerjaan</th>
      <th>Status</th>
      <th>Masukan</th>
      
    </tr>
    <?php 
    $no = $this->uri->segment('3') + 1;
    foreach($tb_judul as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td>
            <?php echo anchor('c_review/terima/'.$u->nip,'terima'); ?>
                  <?php echo anchor('c_review/tolak/'.$u->nip,'tolak'); ?>
      </td>
      
      
      <td><?php echo $u->nip?></td>
      <td><?php echo $u->nim ?></td>
      <td><?php echo $u->nama_judul ?></td>
      <td><?php echo $u->ringkasan ?></td>
      <td><?php echo $u->pembagian_tugas ?></td>
      <td><?php echo $u->pengerjaan ?></td>
      <td><?php echo $u->status ?></td>
      <td><?php echo $u->komentar ?></td>
  
      
      
    </tr>
    <?php } ?>
  </table>
  <br/>
  <?php 
  echo $this->pagination->create_links();
  ?>
  
  </body>
</html>
