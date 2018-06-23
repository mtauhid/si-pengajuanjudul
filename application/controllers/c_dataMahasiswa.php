<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_dataMahasiswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('m_Mahasiswamodel');
  }
  
  public function index(){
    $data['c_dataMahasiswa'] = $this->m_Mahasiswamodel->view();
    $this->load->view('v_tampildatamahasiswa', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ 
      if($this->m_Mahasiswamodel->validation("save")){ 
        $this->m_Mahasiswamodel->save();
        redirect('c_dataMahasiswa');
      }
    }
    
    $this->load->view('v_inputdatamahasiswa');
  }
  
  public function ubah($nim){
    if($this->input->post('submit')){ 
      if($this->m_Mahasiswamodel->validation("update")){ 
        $this->m_Mahasiswamodel->edit($nim);
        redirect('c_dataMahasiswa');
      }
    }
    
    $data['c_dataMahasiswa'] = $this->m_Mahasiswamodel->view_by($nim);
    $this->load->view('v_inputdatamahasiswa', $data);
  }
  
  public function hapus($nim){
    $this->m_Mahasiswamodel->delete($nim);
    redirect('c_dataMahasiswa');
  }
}