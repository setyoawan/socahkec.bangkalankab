<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->db->get('kegiatan')->result_array();
        $this->load->model('m_kegiatan');
        
    }
   
    public function loadkegiatan()
    {
        $data['title'] = 'Kegiatan';
        //$this->load->view('templates/user_header', $data);
        $this->load->view('kegiatan/baca', $data);
        //$this->load->view('templates/user_footer', $data);
    }
    /*
    public function cari()
    {
        $keyword = $this->input->post('katakunci');


        $data = "SELECT * FROM kegiatan WHERE judul
            LIKE '%$keyword%'
            OR isi_kegiatan LIKE '%$keyword%'
            OR tgl LIKE '%$keyword%'
            
            
             ";
       $hasil = $this->db->query($data)->result_array();
        var_dump($hasil);
        die;



    }
    
     public function hasil()
    {
        $data['title'] = 'kegiatan';
        $this->load->view('kegiatan/lihat', $data);



    }

    public function buat()
    {
        $data['title'] = 'Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/buat', $data);
        $this->load->view('templates/footer');
    }
    // submit untuk buat artikel
    public function submit()
    {
        $data = [
            'judul' => ($this->input->post('judul')),
            'isi_kegiatan' => ($this->input->post('isi')),
            'tgl' => date('Y-m-d-')

        ];

        $this->db->insert('kegiatan', $data);

        if ($data > 0) {
            redirect('kegiatan/lihat');


        } else {
            redirect('kegiatan/buat');

        }
    }
    public function lihat()
    {
        $data['title'] = 'kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/lihat', $data);
        $this->load->view('templates/footer');


    }

    function edit()
    {
        global $konek;

        $id = $_POST["id"];
        $judul = htmlspecialchars($_POST["judul_artikel"]);
        $isi = htmlspecialchars($_POST["isi_artikel"]);
        $tgl = htmlspecialchars($_POST["tgl_artikel"]);

        $query = "UPDATE artikel SET 
		judul_artikel = '$judul',
		isi_artikel ='$isi',
		tgl_artikel = '$tgl'
		WHERE id = $id 
		";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);




    }

    function hapus($id)
    {
        global $konek;

        mysqli_query($konek, "DELETE FROM artikel WHERE id=$id");

        return mysqli_affected_rows($konek);
    }

// DIPAKAI =============================================================================
// fungsi untuk mencari data 
     
    
    public function reedit()
    {

        $data['title'] = 'Edit Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/reedit', $data);
        $this->load->view('templates/footer');
    }
    */



}