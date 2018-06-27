<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_laporan extends CI_Model{

  //pageinaton dan view tabel
  function PageReview_judul ($table,$number,$offset){
		
		return $query = $this->db->get($table,$number,$offset)->result();		
	}		

	function Pagejumlah_KirimJudul($table){
		return $this->db->get($table)->num_rows();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
}

	
	}
  
  ?>