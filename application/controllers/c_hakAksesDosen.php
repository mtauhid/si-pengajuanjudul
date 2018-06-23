<?php
class c_hakAksesDosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_hakAksesDosen');
	}
	function index(){
		$this->load->view('header');
       	$this->load->view('sidebar');
       	$data['dosen']=$this->m_hakAksesDosen->selectAll();
		$this->load->view('v_hakAksesDosen',$data);
       	$this->load->view('footer');
		
	}
}

function editHakAksesDosen($nip){
	$where = array('nip' => $nip);
	$data['dosen'] = $this->m_hakAksesDosen->editHakAkses($where,'dosen')->result();
	$this->load->view('v_hakAksesDosen',$data);
}

?>