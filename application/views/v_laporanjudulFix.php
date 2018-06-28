<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-table'></i>
                      <span>Laporan</span>
                    </h1>
                    </div>
                </div>
              </div>
 <center><button  onclick="PrintDoc()">Print Data</button>
<button  onclick="PrintPreview()">Print Preview</button></center>
  <div id="print">
      <center>
        <h2>Laporan Daftar Usulan Tugas Akhir Final</h2>
		<h2>Jurusan Teknik Informatika Politeknik Negeri Jember Tahun 
		<?php $mydate=getdate(date("U"));
			  echo " $mydate[year]";
		?>  
		</h2>
	   </center>
	
	
	
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Judul</th>
			<th>Ringkasan</th>
			<th>Pembagian Tugas</th>
			<th>Pengerjaan</th>
			<th>Status</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($table_ta as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->nama_judul ?></td>
			<td><?php echo $u->ringkasan ?></td>
			<td><?php echo $u->pembagian_tugas ?></td>
			<td><?php echo $u->pengerjaan ?></td>
			<td><?php echo $u->status ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
</div>
 <script type="text/javascript">
 /*--This JavaScript method for Print command--*/
 function PrintDoc() {
  var toPrint = document.getElementById('print');
  var popupWin = window.open('');
  popupWin.document.open();
  popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</html>');
  popupWin.document.close();
 }
 /*--This JavaScript method for Print Preview command--*/
 function PrintPreview() {
  var toPrint = document.getElementById('print');
  var popupWin = window.open('');
  popupWin.document.open();
  popupWin.document.write('<html><title>::Printpreview Data::</title><link rel="stylesheet" type="text/css" href="print.css" media="screen"/></head><body">')
  popupWin.document.write(toPrint.outerHTML);
  popupWin.document.write('</html>');
  popupWin.document.close();
 }
</script>
