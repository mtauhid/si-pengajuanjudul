<?php
	class c_home extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			$this->load->helper('url');

		}

    	public function index(){

        	$this->load->view('header');
        	$this->load->view('home');
        	$this->load->view('footer');
        }
    }
?>