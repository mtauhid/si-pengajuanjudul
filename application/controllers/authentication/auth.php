<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

//fungsi menegecek login user
public function cekAkun(){
	//load model user_error
	$this->load->model('model_users');
	
	//membuat validasi login
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	
	
	$query = $this->model_users->cekAkun($username, $password);
	
	if($query === 1 ){
		return "User tidak ditemukan";
	}else if ($query === 2){
		return "user tidak aktif";
	}else if ($query ===3 ){
		return "Password Salah";
	}else{
		//membuat session dengan nama userdata
		$userData = array(
			'id_user'=> $query->id_user,
			'level'=> $query->level,
			'logged_in' => true
		);
		$this->session->set_userdata($userData);
		return TRUE;
	}
	
}

public function login(){
	//melakukan pengalihan halaman sesuai akses atau level user
	if ($this->session->userdata('level') == "Mahasiswa"){redirect('c_home');}
    if ($this->session->userdata('level') == "Dosen"){redirect('c_home');}
	if ($this->session->userdata('level') == "Koordinator"){redirect('c_home');}
	if ($this->session->userdata('level') == "Reviewer"){redirect('c_home');}
	
	//Proses login dan validasi
	if($this->input->post('submit')){
		$this->load->model('Model_users');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$error = $this->cekAkun();
      
	  if ($this->form_validation->run() && $error === TRUE) {
        $data = $this->Model_users->cekAkun($this->input->post('username'), $this->input->post('password'));
		
		//jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
        if($data->level == 'Mahasiswa'){
          redirect('Dashboard');
        }
        else if($data->level == 'Dosen'){
          redirect('Dashboard');
        }else if($data->level == 'Koordinator'){
			redirect('Dashboard');
		}else if($data->level == 'Reviewer'){
			redirect('Dashboard');
		}
		
	}
	
	    //Jika bernilai FALSE maka tampilkan error
      else{
        $data['error'] = $error;
        $this->load->view('authentication/login', $data);
      }
    }
    //Jika tidak maka alihkan kembali ke halaman login
    else{
      $this->load->view('authentication/login');
    }
  }
  
public function logout() {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('authentication/auth/login');
  }
  
  



	
}
?>
