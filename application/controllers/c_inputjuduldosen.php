<?php 
 
class c_inputjuduldosen extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_inputjuduldosen');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_rekomendasijudul'] = $this->m_inputjuduldosen->tampil_data()->result();
		$this->load->view('v_tampilinputjuduldosen',$data);
	} 

	function tambah(){
		$this->load->view('v_inputjuduldosen');
	}

	function tambah_aksi(){
		$id_judul = $this->input->post('id_judul');
		$nip = $this->input->post('nip');
		$nama_judul = $this->input->post('nama_judul');
		$kuota = $this->input->post('kuota');
		
 
		$data = array(
			'id_judul' => $id_judul,
			'nip' => $nip,
			'nama_judul' => $nama_judul,
			'kuota'=>$kuota
			);
		$this->m_inputjuduldosen->input_data($data,'tb_rekomendasijudul');
		redirect('c_inputjuduldosen/index');
	}

	function hapus($id_judul){
		$where = array('id_judul' => $id_judul);	
		$this->m_inputjuduldosen->hapus_data($where,'tb_rekomendasijudul');
		redirect('c_inputjuduldosen/index');
	}

	function edit($id_judul){
		$where = array('id_judul' => $id_judul);
		$data['tb_rekomendasijudul'] = $this->m_inputjuduldosen->edit_data($where,'tb_rekomendasijudul')->result();
		$this->load->view('v_editjuduldosen',$data);
	}

	function update(){
	$id_judul = $this->input->post('id_judul');
	$nip = $this->input->post('nip');
	$nama_judul = $this->input->post('nama_judul');
	$kuota = $this->input->post('kuota');
 
	$data = array(
		'id_judul' => $id_judul,
		'nip' => $nip,
		'nama_judul' => $nama_judul,
		'kuota'=> $kuota
	);
 
	$where = array(
		'id_judul' => $id_judul
	);
 
	$this->m_inputjuduldosen->update_data($where,$data,'tb_rekomendasijudul');
	redirect('c_inputjuduldosen/index');
}
}