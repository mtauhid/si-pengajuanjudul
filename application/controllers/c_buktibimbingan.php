<?php 


class c_buktibimbingan extends CI_Controller{
	
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
		$config['base_url'] = base_url().'c_buktibimbingan/v_buktibimbingan/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 9000;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['tb_judul'] = $this->m_laporan->PageReview_judul('tb_judul',$config['per_page'],$from);
		$this->load->view('template/header');
	    $this->load->view('template/sidebar');
		$this->load->view('v_buktibimbingan',$data);
		$this->load->view('template/footer');
	
	}
	}
	?>