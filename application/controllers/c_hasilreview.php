<?php
class c_hasilreview extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_hasilreview');
      
	}
	
	function index(){
	$data = array(
		'data'=>$this->m_hasil_review->get_data());
		$this->load->view('c_hasilreview/v_hasilreview',$data);
	}
	}
?>