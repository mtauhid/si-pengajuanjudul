<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class form_mahasiswa extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['judul'] = "SELAMAT DATANG DI SI MAHASISWA";
		$this->load->view('v_inputjudulmhs',$data);
		
	}
	
 
}