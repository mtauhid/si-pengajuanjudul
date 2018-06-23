<?php 
 
class m_inputjuduldosen extends CI_Model{
	
	public function insert($data) {
    $this->db->insert('tb_rekomendasijudul', $data); 
	}
	
}