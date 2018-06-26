<?php 
 
class c_dataMahasiswa extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_Mahasiswamodel');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_mahasiswa'] = $this->m_Mahasiswamodel->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_tampildatamahasiswa',$data);
		$this->load->view('template/footer');
		
	}

	function tambah(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_inputmahasiswa');
		$this->load->view('template/footer');
		
	}

	function tambah_aksi(){
		$nim = $this->input->post('nim');
		$nama_mahasiswa = $this->input->post('nama_mahasiswa');
		$gol_mahasiswa = $this->input->post('gol_mahasiswa');
		$prodi_mahasiswa = $this->input->post('prodi_mahasiswa');
		$semester = $this->input->post('semester');
 
 
		$data = array(
			'nim' => $nim,
			'nama_mahasiswa' => $nama_mahasiswa,
			'gol_mahasiswa' => $gol_mahasiswa,
			'prodi_mahasiswa' => $prodi_mahasiswa,
			'semester' => $semester
			);
		$this->m_Mahasiswamodel->input_data($data,'tb_mahasiswa');
		redirect('c_dataMahasiswa/index');
	}

	function hapus($nim){
		$where = array('nim' => $nim);	
		$this->m_Mahasiswamodel->hapus_data($where,'tb_mahasiswa');
		redirect('c_dataMahasiswa/index');
	}

	public function edit($nim){
		$where = array('nim' => $nim);
		$data['tb_mahasiswa'] = $this->m_Mahasiswamodel->edit_data($where,'tb_mahasiswa')->result();
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_editmahasiswa',$data);
		$this->load->view('template/footer');
	}

	function update(){
	$nim = $this->input->post('nim');
	$nama_mahasiswa = $this->input->post('nama_mahasiswa');
	$gol_mahasiswa = $this->input->post('gol_mahasiswa');
	$prodi_mahasiswa = $this->input->post('prodi_mahasiswa');
	$semester = $this->input->post('semester');
	
	$data = array(
		'nim' => $nim,
		'nama_mahasiswa' => $nama_mahasiswa,
		'gol_mahasiswa' => $gol_mahasiswa,
		'prodi_mahasiswa' => $prodi_mahasiswa,
		'semester' => $semester
	);
 
	$where = array(
		'nim' => $nim
	);
 
	$this->m_Mahasiswamodel->update_data($where,$data,'tb_mahasiswa');
	redirect('c_dataMahasiswa/index');
}
}
?>