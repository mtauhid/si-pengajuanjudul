<?php
class m_kuotaDosen extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("nip","asc"); 
		return $this->db->get('tb_dosen')->result();
   }

   function editKuotaDosen($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>