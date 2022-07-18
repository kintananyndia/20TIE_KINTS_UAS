<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Music_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }

    function index()
    {
        // $data['judul'] = "Halaman Penjualan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['music'] = $this->Music_model->tmusic();
        $data['guitar'] = $this->Music_model->tGuitar();
        $data['piano'] = $this->Music_model->tPiano();
        $data['drum'] = $this->Music_model->tDrum();
        $data['violin'] = $this->Music_model->tViolin();
        $data['harp'] = $this->Music_model->tHarp();
        $data['saxophone'] = $this->Music_model->tSaxophone();
        $data['penjualan'] = $this->Penjualan_model->tpenjualan();
        $data['totalb'] = $this->Detail_model->charts();
        $data['us'] = $this->User_model->tuser();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("auth/dashboard", $data);
        $this->load->view("layout/admin/footer");
    }
}
