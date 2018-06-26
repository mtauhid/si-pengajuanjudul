<?php 


class c_daftarbimbingan extends CI_Controller{
	
	//lihat
		function __construct(){
		parent::__construct();	

		//Cek Login
		//memanggil function dari controller MY_Controller
 
  /*validasi jika session dengan level tidak sesuai
    if ($this->session->userdata('level') == "mahasiswa") {
      redirect('mahasiswa/mahasiswa');
    }*/
	

		//ngeload model ben iso di panggil

		$this->load->model('m_daftarbimbingan');
		//$this->load->model('M_Config');
        $this->load->helper('url');

		
		
	}
 
	function index(){
		
		
		
		$nip = array('nip' =>$this->session->userdata('id_user'));
		//pengaturan pagination tabel dan view nya
		$this->load->database();
		$jumlah_data = $this->m_daftarbimbingan->Pagejumlah_bimbingan('tb_judul');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'c_daftarbimbingan/v_daftarbimbingan/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
	    $data['tb_judul'] = $this->m_daftarbimbingan->Pagedata_bimbingan('tb_judul',$nip,$config['per_page'],$from);
		$this->load->view('v_daftarbimbingan',$data);
		
		/*
		$where = array('id_user' =>$this->session->userdata('username'));
		$data['tabel_ta'] = $this->M_AjukanJudul->tampil_data($where)->result();
		$this->load->view('mahasiswa/ajukanjudul',$data);
		*/
	}



	
	/*Tambah
	function kirimbaru(){
		//manggil dosen
		
		$this->load->view('dosen/Judul-Baru');
		
	}*/

	
//menolak sebagai pembimbing
	function tolak($id_judul){
	$where = array('id_judul' => $id_judul);

	$data = array(
			'status' =>"Di Tolak"
			);

	$this->m_daftarbimbingan->update_data($where,$data,'tb_judul');
	redirect('c_daftarbimbingan/v_daftarbimbingan');
}

	//memnerima sebagai pembimbing
	function Terima($id_judul){	
	
	
	$where = array('id_judul' => $id_judul);
	$data = array(
			'status' =>"Di Terima"
			);
	$this->m_daftarbimbingan->update_data($where,$data,'tb_judul');
	redirect('c_daftarbimbingan/v_daftarbimbingan');
}

}


?>