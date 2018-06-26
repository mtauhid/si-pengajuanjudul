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
            $this->db->or_like('id_dosen', $search, 'both'); 
            $this->db->or_like('id_mahasiswa', $search, 'both'); 
            $this->db->or_like('nama_judul', $search, 'both'); 
            $this->db->or_like('ringkasan', $search, 'both'); 
            $this->db->or_like('pembagian_tugas', $search, 'both');
            $this->db->or_like('pengerjaan', $search, 'both');  
        }
        $tb_judul = $this->db->get('tb_judul');
        $data['result'] = $tb_judul->result_array();
        $data['num_rows'] = $tb_judul->num_rows();
        $this->load->view('v_readinputjudulmhs', $data);
    }

    public function save()
    {
        $input['id_judul'] = $this->input->post('id_judul');
        $input['id_dosen'] = $this->input->post('id_dosen');
        $input['id_mahasiswa'] = $this->input->post('id_mahasiswa');
        $input['nama_judul'] = $this->input->post('nama_judul');
        $input['ringkasan'] = $this->input->post('ringkasan');
        $input['pembagian_tugas'] = $this->input->post('pembagian_tugas');
        $input['pengerjaan'] = $this->input->post('pengerjaan');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('id_judul', $updateID);
            $this->db->update('tb_judul', $input);
        } else {
            $this->db->insert('tb_judul', $input);
        }
        redirect('si-pengajuanjudul/c_inputjudulmhs/index');
    }

    public function v_createinputjudulmhs()
    {
        $this->load->view('v_createinputjudulmhs');
    }

    public function v_updateinputjudulmhs($id)
    {
        $this->db->where('id_judul', $id);
        $data['update'] = $this->db->get('tb_judul')->row_array();
        $this->load->view('v_createinputjudulmhs', $data);
    }

    public function v_deleteinputjudulmhs($id)
    {
        $this->db->where('id_judul', $id);
        $data['v_deleteinputjudulmhs'] = $this->db->get('tb_judul')->row_array();
        $this->load->view('v_deleteinputjudulmhs', $data);
    }

    public function real_delete()
    {
        $id = $this->input->post('id_judul');
        $this->db->where('id_judul', $id);
        $this->db->delete('tb_judul');
        redirect('si-pengajuanjudul/c_inputjudulmhs/');
    }
}