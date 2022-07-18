<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Music extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Music_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Music";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['music'] = $this->Music_model->get();
        $this->load->view("layout/admin/header", $data);
        $this->load->view("music/vw_music", $data);
        $this->load->view("layout/admin/footer", $data);
    }
    public function tambah()
    {
        // $data['judul'] = "Halaman Tambah Music";
        // $this->load->view("layout/header");
        // $this->load->view("music/vw_tambah_music", $data);
        // $this->load->view("layout/footer");

        $data['judul'] = "Halaman Tambah Music";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['music'] = $this->Music_model->get();

        $this->form_validation->set_rules('merk', 'Merk Music', 'required', [
            'required' => 'Nama Music Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis Music', 'required', [
            'required' => 'Nama Music Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Music Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Music Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("music/vw_tambah_music", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
            ];

            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets_admin/img/music/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Music_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Music Berhasil Ditambah!</div>');
            redirect('Music');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Music";
        $data['music'] = $this->Music_model->getById($id);
        $this->load->view("layout/admin/header", $data);
        $this->load->view("music/vw_detail_music", $data);
        $this->load->view("layout/admin/footer");
    }
    public function hapus($id)
    {
        // $this->Music_model->delete($id);
        // redirect('Music');
        $this->Music_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Music tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Music Berhasil Dihapus!</div>');
        }
        redirect('Music');
    }
    // function upload()
    // {
    //     $data = [
    //         'merk' => $this->input->post('merk'),
    //         'stok' => $this->input->post('stok'),
    //         'jurusan' => $this->input->post('jurusan'),
    //         'harga' => $this->input->post('harga'),
    //         'merk_kamusic' => $this->input->post('merk_kamusic'),
    //         'tahun_berdiri' => $this->input->post('tahun_berdiri'),
    //         'output_lulusan' => $this->input->post('output_lulusan'),
    //     ];
    //     $this->Music_model->insert($data);
    //     redirect('Music');
    // }
    public function edit($id)
    {
        // $data['judul'] = "Halaman Edit Music";
        // $data['music'] = $this->Music_model->getById($id);
        // $this->load->view("layout/header");
        // $this->load->view("music/vw_ubah_music", $data);
        // $this->load->view("layout/footer");
        $data['judul'] = "Halaman Tambah Music";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['music'] = $this->Music_model->getById($id);

        $this->form_validation->set_rules('merk', 'Nama Music', 'required', [
            'required' => 'Nama Music Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis Music', 'required', [
            'required' => 'Jenis Music Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Music Wajib di isi'
        ]);

        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Music Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/admin/header", $data);
            $this->load->view("music/vw_ubah_music", $data);
            $this->load->view("layout/admin/footer");
        } else {
            $data = [
                'merk' => $this->input->post('merk'),
                'jenis' => $this->input->post('jenis'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),

            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets_admin/img/music/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['music']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets_admin/img/music/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Music_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Music Berhasil DiUbah!</div>');
            redirect('Music');
        }
    }
    // function update()
    // {
    //     $data = [
    //         'merk' => $this->input->post('merk'),
    //         'stok' => $this->input->post('stok'),
    //         'jurusan' => $this->input->post('jurusan'),
    //         'harga' => $this->input->post('harga'),
    //         'merk_kamusic' => $this->input->post('merk_kamusic'),
    //         'tahun_berdiri' => $this->input->post('tahun_berdiri'),
    //         'output_lulusan' => $this->input->post('output_lulusan'),
    //     ];
    //     $id = $this->input->post('id');
    //     $this->Music_model->update(['id' => $id], $data);
    //     redirect('Music');
    // }
}
