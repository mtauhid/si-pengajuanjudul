<?php
class c_kuotaDosen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_kuotaDosen');
	}
	function index(){
    $tb_dosen = $this->db->get('tb_dosen');
    $data['num_rows'] = $tb_dosen->num_rows();
    $data['dosen']=$this->m_kuotaDosen->selectAll();
    $this->load->view('header');
    $this->load->view('v_kuotaDosen',$data);
    $this->load->view('footer');
		
	}

  function editkuotaDosen($nip){
    $this->load->view('header');
    $where = array('nip' => $nip);
    $data['dosen'] = $this->m_kuotaDosen->editkuotaDosen($where,'tb_dosen')->result();
    $this->load->view('v_editKuotaDosen',$data);
    $this->load->view('footer');
}

function update(){
  $nip = $this->input->post('nip');
  $kuota = $this->input->post('kuota');
 
  $data = array(
    'kuota' => $kuota
  );
 
  $where = array(
    'nip' => $nip
  );
 
  $this->m_kuotaDosen->update_data($where,$data,'tb_dosen');
  redirect('c_kuotaDosen');
}
}
?>