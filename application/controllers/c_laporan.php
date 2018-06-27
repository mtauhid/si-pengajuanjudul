<?php 


class c_laporan extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//Cek Login
		//memanggil function dari controller MY_Controller
 
  //validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "dosen") {
      redirect('Dashboard');
 }

	


		//ngeload model ben iso di panggil
		//$this->load->model('m_daftarbimbingan');
		//$this->load->model('m_inputjudulmhs');
		$this->load->model('m_laporan');
		//$this->load->model('m_inputjuduldosen');
        $this->load->helper('url');
		
		
	}
 

	function index(){
		
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->m_laporan->Pagejumlah_KirimJudul('tb_judul');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'c_laporan/v_laporandaftarjudul/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 9000;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['tb_judul'] = $this->m_laporan->PageReview_judul('tb_judul',$config['per_page'],$from);
		
		$this->load->view('v_laporandaftarjudul',$data);
	
	}
	
	/*function DaftarUsulanfix(){
		
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->M_Config->Pagejumlah_KirimJudul('table_tafix');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'mahasiswa/usulanjudul/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 9000;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_Config->PageReview_judul('table_tafix',$config['per_page'],$from);
		$this->load->view('public/Laporan_DaftarUsulanfix',$data);
	
	}*/
	
	/*function Pembimbing(){
		
		
		
		
		$Dospem = array('Status_pembimbing' =>'Di Terima');
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->M_Daftarbimbingan->Pagejumlah_bimbingan('table_ta');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'dosen/DaftarPenelitian/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 9999;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['table_ta'] = $this->M_Daftarbimbingan->Pagedata_bimbingan('table_ta',$Dospem,$config['per_page'],$from);
		$this->load->view('public/Laporan_Bimbingan',$data);
		
	
		
	}
*/



}
?>