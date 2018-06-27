<?php 
 
class m_deadline extends CI_Model{
	
	public function insert($data) {
    $this->db->insert('tb_deadline', $data); 
	}
	
	public function delete($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	public function edit($where,$table){		
	return $this->db->get_where($table,$where);
	}

	public function update($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table,$data);
	}
}