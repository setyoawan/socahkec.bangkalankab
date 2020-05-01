<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->db->get('artikel')->result_array();
        $this->load->model('m_data');



    }

    
    // MENAMPILKAN BACA SELENGKAPNYA DI USER PAGE==>BACA.PHP
    public function loadartikel()
    {
        $data['title'] = 'Artikel';
        //$this->load->view('templates/user_header', $data);
        $this->load->view('artikel/baca', $data);
        //$this->load->view('templates/user_footer', $data);

    }
    /*
    public function cari()
    {
        $keyword = $this->input->post('katakunci');


        $data = "SELECT * FROM artikel WHERE judul_artikel
            LIKE '%$keyword%'
            OR isi_artikel LIKE '%$keyword%'
            OR tgl_artikel LIKE '%$keyword%'
            
            
             ";
        $hasil = $this->db->query($data)->result_array();

        $this->load->view('artikel/hasil', $hasil);
        var_dump($hasil);
        die;


    }
    
    //MENAMPILKAN HASIL PENCARIAN DI ADMIN PAGE (ARTIKEL)==> HASIL.PHP
    public function hasil()
    {
        $data['title'] = 'Hasil Pencarian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/hasil', $data);
        $this->load->view('templates/footer');

    }
    
    public function buat()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/buat', $data);
        $this->load->view('templates/footer');
    }
    // submit untuk buat artikel
    public function submit()
    {
        $data = [
            'judul_artikel' => ($this->input->post('judul_artikel')),
            'isi_artikel' => ($this->input->post('isi_artikel')),
            'tgl_artikel' => date('Y-m-d-')

        ];

        $this->db->insert('artikel', $data);

        if ($data > 0) {
            redirect('artikel/lihat');


        } else {
            redirect('artikel/buat');

        }
    }
    
    public function lihat()
    {
        $data['title'] = 'Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/lihat', $data);
        $this->load->view('templates/footer');


    }
    
    public function edit()
    {
        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/reedit', $data);
        $this->load->view('templates/footer');

        
        /*
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
    // fungsi untuk mencari data ARTIKEL==> LOAD KE HASIL.PHP


    
    
    public function reedit()
    {

        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/reedit', $data);
        $this->load->view('templates/footer');
    }
    
    public function edit($id)
    {
        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $where = array('id' => $id);
        $data['artikel'] = $this->m_artikel->edit_data($where, 'artikel')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/edit', $data);
        $this->load->view('templates/footer');
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update()
    {
        $data = [

            'judul_artikel' => ($this->input->post('judul_artikel')),
            'isi_artikel' => ($this->input->post('isi_artikel'))


        ];

        $id = $this->input->post('id');
        $where = array(
            'id' => $id
        );

        $this->m_artikel->update_data($where, $data, 'artikel');
        redirect('artikel/lihat');
    }

    public function hapus($id)
    {

        $where = array('id' => $id);
        $hasil = $this->m_artikel->hapus_data($where, 'artikel');
        redirect('artikel/lihat');



    }
     
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin');

        $artikel = $this->m_artikel;
        $validation = $this->form_validation;
        $validation->set_rules($artikel->rules());

        if ($validation->run()) {
            $artikel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["artikel"] = $artikel->getById($id);
        if (!$data["artikel"]) show_404();

        $data['title'] = 'Edit Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('artikel/edit', $data);
        $this->load->view('templates/footer');
    }



     */

}