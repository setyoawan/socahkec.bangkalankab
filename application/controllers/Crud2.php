<?php

class Crud2  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kegiatan');
        
    }   
    function index()
    {
        $data['kegiatan'] = $this->m_kegiatan->tampil_data()->result();
        
        $data['title'] = 'Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    function input()
    {
        $data['title'] = 'Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/buat');
        $this->load->view('templates/footer');   
        
    }


    function tambah_aksi()
    {
        $config['upload_path']         = 'assets/img/artikelkegiatan';  // folder upload 
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
            $judul_kegiatan = $this->input->post('judul_kegiatan');
            $isi_kegiatan = $this->input->post('isi_kegiatan');
            $file = $this->upload->data();

            $data = array(
                'gambar' => $gambar,
                'judul_kegiatan' => $judul_kegiatan,
                'isi_kegiatan' => $isi_kegiatan,
                'tgl_kegiatan' => date('Y-m-d-')
            );

             $this->m_kegiatan->input_data($data, 'kegiatan');
            //======================================
            helper_log("add", "Menulis artikel kegiatan");
            //======================================
            redirect('crud2/index');
        }
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_kegiatan->hapus_data($where, 'kegiatan');

        //======================================
        helper_log("hapus", "Menghapus kegiatan");
        //======================================

        redirect('crud2/index');
    }

    function edit($id)  
    {
        $where = array('id' => $id);
        $data['kegiatan'] = $this->m_kegiatan->edit_data($where, 'kegiatan')->result();

        $data['title'] = 'kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/v_edit', $data);
        $this->load->view('templates/footer');
        
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update()
    {
        $id = $this->input->post('id');
        $judul_kegiatan = $this->input->post('judul_kegiatan');
        $isi_kegiatan = $this->input->post('isi_kegiatan');
        

        $data = array(
            'judul_kegiatan' => $judul_kegiatan,
            'isi_kegiatan' => $isi_kegiatan
            
        );

        $where = array(
            'id' => $id
        );

        //======================================
        helper_log("edit", "Mengedit kegiatan");
        //======================================

        $this->m_kegiatan->update_data($where, $data, 'kegiatan');
        redirect('crud2/index');
    }
}