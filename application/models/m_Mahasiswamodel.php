<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_Mahasiswamodel extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function view(){
    return $this->db->get('tb_mahasiswa')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($nim){
    $this->db->where('nim', $nim);
    return $this->db->get('tb_mahasiswa')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
    $this->form_validation->set_rules('input_nim', 'NIM', 'required|max_length[10]');
	$this->form_validation->set_rules('input_namamahasiswa', 'Nama Mahasiswa', 'required|max_length[35]');
    $this->form_validation->set_rules('input_golmahasiswa', 'Golongan', 'required');
    $this->form_validation->set_rules('input_prodimahasiswa', 'Prodi', 'required|max_length[10]');
    $this->form_validation->set_rules('input_semester', 'Semester', 'required|max_length[2]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "nim" => $this->input->post('input_nim'),
      "nama_mahasiswa" => $this->input->post('input_namamahasiswa'),
      "gol_mahasiswa" => $this->input->post('input_golmahasiswa'),
      "prodi_mahasiswa" => $this->input->post('input_prodimahasiswa'),
      "semester" => $this->input->post('input_semester')
    );
    
    $this->db->insert('tb_mahasiswa', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($nim){
    $data = array(
	  "nama_mahasiswa" => $this->input->post('input_namamahasiswa'),
      "gol_mahasiswa" => $this->input->post('input_golmahasiswa'),
      "prodi_mahasiswa" => $this->input->post('input_prodimahasiswa'),
      "semester" => $this->input->post('input_semester')
      
    );
    
    $this->db->where('nim', $nim);
    $this->db->update('tb_mahasiswa', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($nim){
    $this->db->where('nim', $nim);
    $this->db->delete('tb_mahasiswa'); // Untuk mengeksekusi perintah delete data
  }
}
?>