<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_inputjuduldosen extends CI_Controller {

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
            $this->db->or_like('nama_judul', $search, 'both'); 
            $this->db->or_like('kuota', $search, 'both'); 
        }
        $tb_rekomendasijudul = $this->db->get('tb_rekomendasijudul');
        $data['result'] = $tb_rekomendasijudul->result_array();
        $data['num_rows'] = $tb_rekomendasijudul->num_rows();
        $this->load->view('v_headinputjuduldosen');
        $this->load->view('v_readinputjuduldosen', $data);
        $this->load->view('v_footinputjuduldosen');
    }

    public function save()
    {
        $input['id_judul'] = $this->input->post('id_judul');
        $input['nip'] = $this->input->post('nip');
        $input['nama_judul'] = $this->input->post('nama_judul');
        $input['kuota'] = $this->input->post('kuota');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('id_judul', $updateID);
            $this->db->update('tb_rekomendasijudul', $input);
        } else {
            $this->db->insert('tb_rekomendasijudul', $input);
        }
        redirect('/c_inputjuduldosen/index');
    }

    public function v_createinputjuduldosen()
    {
        $this->load->view('v_headinputjuduldosen');
        $this->load->view('v_createinputjuduldosen');
        $this->load->view('v_footinputjuduldosen');
    }

    public function v_updateinputjuduldosen($id)
    {
        $this->db->where('id_judul', $id);
        $data['update'] = $this->db->get('tb_rekomendasijudul')->row_array();
        $this->load->view('v_headinputjuduldosen');
        $this->load->view('v_createinputjuduldosen', $data);
        $this->load->view('v_footinputjuduldosen');
    }

    public function v_deleteinputjuduldosen($id)
    {
        $this->db->where('id_judul', $id);
        $data['v_deleteinputjuduldosen'] = $this->db->get('tb_rekomendasijudul')->row_array();
        $this->load->view('v_headinputjuduldosen');
        $this->load->view('v_deleteinputjuduldosen', $data);
        $this->load->view('v_footinputjuduldosen');
    }

    public function real_delete()
    {
        $id = $this->input->post('id_judul');
        $this->db->where('id_judul', $id);
        $this->db->delete('tb_rekomendasijudul');
        redirect('/c_inputjuduldosen/');
    }
}