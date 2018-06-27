<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_inputjudulmhs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {

        
        // apakah ada pencarian data spesifik dengan kata kunci tertentu?
        $search = $this->input->get('search');
        if (!empty($search)) {

            $this->db->like('id_judul', $search, 'both'); 
            $this->db->or_like('nip', $search, 'both'); 
            $this->db->or_like('nim', $search, 'both'); 
            $this->db->or_like('nama_judul', $search, 'both'); 
            $this->db->or_like('ringkasan', $search, 'both'); 
            $this->db->or_like('pembagian_tugas', $search, 'both');
            $this->db->or_like('pengerjaan', $search, 'both'); 
            $this->db->or_like('status', $search, 'both');
            $this->db->or_like('komentar', $search, 'both');  
        }
        $tb_judul = $this->db->get('tb_judul');
        $data['result'] = $tb_judul->result_array();
        $data['num_rows'] = $tb_judul->num_rows();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_readinputjudulmhs', $data);
        $this->load->view('template/footer');
    }

    public function save()
    {
        $input['id_judul'] = $this->input->post('id_judul');
        $input['nip'] = $this->input->post('nip');
        $input['nim'] = $this->input->post('nim');
        $input['nama_judul'] = $this->input->post('nama_judul');
        $input['ringkasan'] = $this->input->post('ringkasan');
        $input['pembagian_tugas'] = $this->input->post('pembagian_tugas');
        $input['pengerjaan'] = $this->input->post('pengerjaan');
        $input['status'] = $this->input->post('status');
        $input['komentar'] = $this->input->post('komentar');

        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('id_judul', $updateID);
            $this->db->update('tb_judul', $input);
        } else {
            $this->db->insert('tb_judul', $input);
        }
        redirect('c_inputjudulmhs/index');
    }

    public function v_createinputjudulmhs()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_createinputjudulmhs');
        $this->load->view('template/footer');
    }

    public function v_updateinputjudulmhs($id)
    {
        $this->db->where('id_judul', $id);
        $data['update'] = $this->db->get('tb_judul')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_createinputjudulmhs', $data);
        $this->load->view('template/footer');
    }

    public function v_deleteinputjudulmhs($id)
    {
        $this->db->where('id_judul', $id);
        $data['v_deleteinputjudulmhs'] = $this->db->get('tb_judul')->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_deleteinputjudulmhs', $data);
        $this->load->view('template/footer');
    }

    public function real_delete()
    {
        $id = $this->input->post('id_judul');
        $this->db->where('id_judul', $id);
        $this->db->delete('tb_judul');
        redirect('c_inputjudulmhs/');
    }
}