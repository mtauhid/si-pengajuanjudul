<?php
class m_hakAksesDosen extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("nip","desc"); 
		return $this->db->get('tb_dosen')->result();
   }

   function editHakAkses($where,$table){		
	return $this->db->get_where($table,$where);
}
}
?>