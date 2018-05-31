<?php
	class c_home extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->helper('url');

		}

    	public function index(){

        	$this->load->view('template/header');
        	$this->load->view('v_home');
        	$this->load->view('template/sidebar');
        	$this->load->view('template/content');
        	$this->load->view('template/footer');
        }
    }
?>