<?php
class c_hakAksesDosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_hakAksesDosen');
	}
	function index(){
    $tb_dosen = $this->db->get('tb_dosen');
    $data['num_rows'] = $tb_dosen->num_rows();
    $data['dosen']=$this->m_hakAksesDosen->selectAll();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('v_hakAksesDosen',$data);
    $this->load->view('template/footer');
    
		
	}

  function editHakAksesDosen($nip){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $where = array('nip' => $nip);
    $data['dosen'] = $this->m_hakAksesDosen->editHakAksesDosen($where,'tb_dosen')->result();
    $this->load->view('v_editHakAksesDosen',$data);
    $this->load->view('template/footer');
}

function update(){
  $nip = $this->input->post('nip');
  $level = $this->input->post('level_dosen');
 
  $data = array(
    'level_dosen' => $level
  );
 
  $where = array(
    'nip' => $nip
  );
 
  $this->m_hakAksesDosen->update_data($where,$data,'tb_dosen');
  redirect('c_hakAksesDosen');
}
}
?>