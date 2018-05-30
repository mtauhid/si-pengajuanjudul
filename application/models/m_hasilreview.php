<?php
class m_hasilreview extends CI_Model {
	
	function get_table(){
        return $this->db->get("review");
    }
    
	function get_data(){
	
	$this->db->select('*'); 
    $this->db->from('tb_review'); 
    $this->db->join('tb_review', 'tb_review.id_review = tb_review.id_judul', 'left');
	$this->db->join('tb_mahasiswa', 'tb_mahasiswa.nim = tb_review.id_mahasiswa', 'left');
    $data = $this->db->get(); 
    return $data->result(); 
	}
	}
?>