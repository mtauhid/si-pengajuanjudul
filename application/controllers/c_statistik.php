<?php
class c_statistik extends CI_Controller{
	function index(){
		$this->load->view('header');
        $this->load->view('v_home');
       	$this->load->view('sidebar');
		$this->load->view("v_statistik");
		$this->load->view('footer');
		
	}
}
?>