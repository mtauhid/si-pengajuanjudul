<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_deadline extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {

        
        // apakah ada pencarian data spesifik dengan kata kunci tertentu?
        $search = $this->input->get('search');
        if (!empty($search)) {

            $this->db->like('id_deadline', $search, 'both'); 
            $this->db->or_like('nama_deadline', $search, 'both'); 
            $this->db->or_like('tanggal_awal', $search, 'both'); 
            $this->db->or_like('tanggal_akhir', $search, 'both'); 
        }
        $tb_deadline = $this->db->get('tb_deadline');
        $data['deadline'] = $tb_deadline->result_array();
        $data['num_rows'] = $tb_deadline->num_rows();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_deadline', $data);
        $this->load->view('template/footer');
        
    }

    public function save()
    {
        $input['id_deadline'] = $this->input->post('id_deadline');
        $input['nama_deadline'] = $this->input->post('nama');
        $input['tanggal_awal'] = $this->input->post('tgl_awal');
        $input['tanggal_akhir'] = $this->input->post('tgl_akhir');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('id_deadline', $updateID);
            $this->db->update('tb_deadline', $input);
        } else {
            $this->db->insert('tb_deadline', $input);
        }
        redirect('/c_deadline/index');
    }

    public function v_inputdeadline()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_inputdeadline');
        $this->load->view('template/footer');
    }

    public function v_updatedeadline($id_deadline)
    {
        $this->db->where('id_deadline', $id_deadline);
        $data['update'] = $this->db->get('tb_deadline')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_inputdeadline', $data);
        $this->load->view('template/footer');
    }

    public function v_deletedeadline($id_deadline)
    {
        $this->db->where('id_deadline', $id_deadline);
        $data['v_deletedeadline'] = $this->db->get('tb_deadline')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_deletedeadline', $data);
        $this->load->view('template/footer');
    }

    public function real_delete()
    {
        $id = $this->input->post('id_deadline');
        $this->db->where('id_deadline', $id);
        $this->db->delete('tb_deadline');
        redirect('/c_deadline/');
    }
}