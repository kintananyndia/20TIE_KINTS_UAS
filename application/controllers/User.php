<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Music_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Penjualan_model');
        $this->load->model('Detail_model');
    }

    function index()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    function displayGuitar()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getGuitar();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    function displayPiano()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getPiano();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    function displayDrum()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getDrum();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    function displayViolin()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getViolin();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    function displaySaxophone()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getSaxophone();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    function displayHarp()
    {
        $data['judul'] = "Daftar Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getHarp();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_music", $data);
        $this->load->view("layout/user/footer", $data);
    }

    // public function music()
    // {
    //     $data['judul'] = "Daftar Music";
    //     $data['user'] = $this->userrole->getBy();
    //     $data['music'] = $this->Music_model->get();
    //     $data['jlh'] = $this->Keranjang_model->jumlah();
    //     $this->load->view("layout/user/header", $data);
    //     $this->load->view("user/vw_music", $data);
    //     $this->load->view("layout/user/footer", $data);
    // }

    public function keranjang($id)
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Music";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->getById($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/user/header", $data);
            $this->load->view("user/vw_keranjang", $data);
            $this->load->view("layout/user/footer");
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_music' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
            ];

            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Music Berhasil Ditambahkan kekeranjang!</div>');
            redirect('User/detail');
        }
    }

    public function detail()
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Keranjang";
        $data['user'] = $this->userrole->getBy();
        $data['music'] = $this->Music_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/user/header", $data);
        $this->load->view("user/vw_detail_keranjang", $data);
        $this->load->view("layout/user/footer");
    }

    public function delkeranjang($id)
    {
        $this->Keranjang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus dari keranjang!</div>');
        redirect('User/detail');
    }

    public function pesanan()
    {
        $jumlah_beli = count($this->input->post('music'));
        $data_p = [
            'no_penjualan' => $this->input->post('no_penjualan'),
            'id_user' => $this->session->userdata('id'),
            'tanggal' => $this->input->post('tanggal'),
            'total_bayar' => $this->input->post('bayar'),
            'alamat' => $this->input->post('alamat'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),
        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets_user/img/pembayaran/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data_detail = [];
        for ($i = 0; $i < $jumlah_beli; $i++) {
            array_push($data_detail, ['id_music' => $this->input->post('music')[$i]]);
            $data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
            $data_detail[$i]['id_user'] = $this->session->userdata('id');
            $data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
            $data_detail[$i]['total'] = $this->input->post('total_p')[$i];
        }
        if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
            for ($i = 0; $i < $jumlah_beli; $i++) {
                $this->Music_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_music']) or die('gagal min stok');
            }
            $id_us = $this->session->userdata('id');
            $this->Keranjang_model->delete_all($id_us);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil dibuat!</div>');
            redirect('User/');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Gagal dibuat!</div>');
            redirect('User/');
        }
    }

    public function pembelian()
    {
        $data['judul'] = "Data Pembelian";
        $data['user'] = $this->userrole->getBy();
        $data['pembelian'] = $this->Penjualan_model->getByUser();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/user/header', $data);
        $this->load->view('user/pembelian_user', $data);
        $this->load->view('layout/user/footer', $data);
    }

    public function statusbeli($id)
    {
        $data['judul'] = "Ubah Data Pembelian";
        $data['user'] = $this->userrole->getBy();
        $data['pembelian'] = $this->Penjualan_model->getByUser2($id);
        $data['detailbeli'] = $this->Detail_model->getByUser($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/user/header", $data);
            $this->load->view("user/detail_beli", $data);
            $this->load->view("layout/user/footer");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil DiUbah!</div>');
            redirect('User/pembelian');
        }
    }
}
