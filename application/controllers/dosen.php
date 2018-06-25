<?php 
 
class Dosen extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_datadosen');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_dosen'] = $this->m_datadosen->tampil_data()->result();
		$this->load->view('v_tampildosen',$data);
		if($this ->session ->userdata('level') != 1){

      redirect(base_url('authentication/auth/login'));
    }
	}

	function tambah(){
		$this->load->view('v_inputdosen');
	}

	function tambah_aksi(){
		$nip = $this->input->post('nip');
		$nama_dosen = $this->input->post('nama_dosen');
		$prodi_dosen = $this->input->post('prodi_dosen');
		$level_dosen = $this->input->post('level_dosen');
 
		$data = array(
			'nip' => $nip,
			'nama_dosen' => $nama_dosen,
			'prodi_dosen' => $prodi_dosen,
			'level_dosen' => $level_dosen
			);
		$this->m_datadosen->input_data($data,'tb_dosen');
		redirect('dosen/index');
	}

	function hapus($nip){
		$where = array('nip' => $nip);	
		$this->m_datadosen->hapus_data($where,'tb_dosen');
		redirect('dosen/index');
	}

	public function edit($nip){
		$where = array('nip' => $nip);
		$data['tb_dosen'] = $this->m_datadosen->edit_data($where,'tb_dosen')->result();
		$this->load->view('v_editdosen',$data);
	}

	function update(){
	$nip = $this->input->post('nip');
	$nama_dosen = $this->input->post('nama_dosen');
	$prodi_dosen = $this->input->post('prodi_dosen');
	$level_dosen = $this->input->post('level_dosen');
 
	$data = array(
		'nip' => $nip,
		'nama_dosen' => $nama_dosen,
		'prodi_dosen' => $prodi_dosen,
		'level_dosen' => $level_dosen
	);
 
	$where = array(
		'nip' => $nip
	);
 
	$this->m_datadosen->update_data($where,$data,'tb_dosen');
	redirect('dosen/index');
}
}