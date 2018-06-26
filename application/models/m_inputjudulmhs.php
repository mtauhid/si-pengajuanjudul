<?php 
 
class m_inputjudulmhs extends CI_Model{
	
	public function insert($data) {
    $this->db->insert('tb_judul', $data); 
	}
	
}