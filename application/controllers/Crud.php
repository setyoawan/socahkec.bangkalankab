<?php

class Crud extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        
        
    }
    function index()
    {
        $data['artikel'] = $this->m_data->tampil_data()->result();
        
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    function input()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/buat');
        $this->load->view('templates/footer');   
        
    }


    function tambah_aksi()
    {
        
        $config['upload_path']         = 'assets/img/artikelberita';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
        $config['max_size']             = 3000;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload , foto maksimal 2 MB';
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $judul_artikel = $this->input->post('judul_artikel');
            $isi_artikel = $this->input->post('isi_artikel');
            $file = $this->upload->data();

            $data = array(
                'gambar' => $gambar,
                'judul_artikel' => $judul_artikel,
                'isi_artikel' => $isi_artikel,
                'tgl_artikel' => date('Y-m-d-')
            );

             $this->m_data->input_data($data, 'artikel');
            //======================================
            helper_log("add", "Menulis artikel berita");
            //======================================
            redirect('crud/index');
        }

    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'artikel');

        //======================================
        helper_log("hapus", "Menghapus artikel");
        //======================================
        redirect('crud/index');
    }

    function edit($id)  
    {
        $where = array('id' => $id);
        $data['artikel'] = $this->m_data->edit_data($where, 'artikel')->result();

        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/v_edit', $data);
        $this->load->view('templates/footer');
        
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update()
    {
        $id = $this->input->post('id');
        $judul_artikel = $this->input->post('judul_artikel');
        $isi_artikel = $this->input->post('isi_artikel');
        

        $data = array(
            'judul_artikel' => $judul_artikel,
            'isi_artikel' => $isi_artikel
            
        );


        $where = array(
            'id' => $id
        );
        //======================================
        helper_log("edit", "Mengedit artikel");
        //======================================

        $this->m_data->update_data($where, $data, 'artikel');
        redirect('crud/index');
    }



    
}
