<?php

class m_mahasiswamilihdosen extends CI_Model{

	function selectAll()
	{
		$this->db->order_by("tb_judul","desc"); 
		return $this->db->get('db_pengajuanjudulta')->result();
   }
}

     /* function selectAll($nip){
    $data = array();
    $options = array('nip' => $nip);
    $Q = $this->db->get_where('tb_judul',$options,1);
    if ($Q->num_rows() > 0){
      $data = $Q->row_array();
 
  $Q->free_result();
  return $data;
}

      }    

}