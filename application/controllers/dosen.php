<?php 
 
class Dosen extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
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
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nip = $this->input->post('nip');
	$nama_dosen = $this->input->post('nama_dosen');
	$prodi_dosen = $this->input->post('prodi_dosen');
	$level_dosen = $this->input->post('level_dosen');
 
	$data = array(
		'nip' => $nama,
		'nama_dosen' => $nama_dosen,
		'prodi_dosen' => $prodi_dosen,
		'level_dosen' => $level_dosen
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
}
}