<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class M_Config extends CI_Model{
	  
						//model gk jelas yang buat bantu nampilin hal hal absurd
	  
  //cari dosen dan tampilin data di option pada halaman view Kirim-Judul - ubah judul
function tampilnamaDosen(){
		
		$query = $this->db->query("SELECT * FROM tb_users WHERE level IN ('Dosen','Koordinator','Reviewer','Mahasiswa') ");
		return $query->result();
	}

//cari dosen dan tampilin data di option pada halaman view Kirim-Judul - ubah judul
function aksesUser(){
		
		$query = $this->db->query("SELECT DISTINCT level FROM tb_users ");
		return $query->result();
	}

	//Pagination di page User Data 
function PagedataUser($table,$number,$offset){
		return $query = $this->db->get($table,$number,$offset)->result();		
	}
 
function Pagejumlah_dataUser($table){
		return $this->db->get($table)->num_rows();
	}
	/*
	
	//Pagination di page Kirim-Judul 
function Pagedata_KirimJudul($table,$where,$number,$offset){
		$this->db->where($where);
		return $query = $this->db->get($table,$number,$offset)->result();		
	}
 function PageReview_judul ($table,$number,$offset){
		
		return $query = $this->db->get($table,$number,$offset)->result();		
	}
	
function Pagejumlah_KirimJudul($table){
		return $this->db->get($table)->num_rows();
	}

	
	//Pagination di page Kirim-Judul ficx
function Pagedata_KirimJudulfix($table,$where,$number,$offset){
		$this->db->where($where);
		return $query = $this->db->get($table,$number,$offset)->result();		
	}
 function PageReview_judulfix ($table,$number,$offset){
		
		return $query = $this->db->get($table,$number,$offset)->result();		
	}
	
function Pagejumlah_KirimJudulfix($table){
		return $this->db->get($table)->num_rows();
	}
	
//batas waktu
function BatasWaktuJudulTA(){
	$query = $this->db->query("SELECT  * FROM deadline where deadline_pengajuan = 'Judul Tugas Akhir' ");
	//$this->db->where($where);
    return $query->result_array();
	
	}
	
	function BatasWaktuProposal(){
		$query = $this->db->query("SELECT  *FROM tanggal where Proses = 'Proposal' ");
		 return $query->result_array();
	}
	
	function BatasWaktuJudulTAFIX(){
		$query = $this->db->query("SELECT  *FROM tanggal where Proses = 'JudulTAFix' ");
		 return $query->result_array();
	}
	
	function TampilTanggal(){
		 	$query = $this->db->query("SELECT *FROM tanggal ");
			return $query->result();
	}
	
	function update_Tanggal_TA($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	*/


	


	
	
  }
	
  ?>