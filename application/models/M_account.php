<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model{

       function daftar($data,$data2)
       {
            $this->db->insert('tb_users',$data);
			$this->db->insert('tb_mahasiswa',$data2);
	
       }
  }