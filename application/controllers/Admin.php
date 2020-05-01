<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        is_login();

    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //LOG AKTIVITAS UNTUK MEMONITORING KEGIATAN YANG SELALU DI LAKUKAN OPERATOR ADMIN========================================
        $data['log'] = $this->m_data->log()->result();


        // function untuk menampilkan INTEGER di view index admin ===============================================================
        $data['total_artikel'] = $this->m_data->hitungJumlahartikel();
        $data['total_kegiatan'] = $this->m_data->hitungJumlahkegiatan();
        $data['total_gambar'] = $this->m_data->hitungJumlahgambar();
       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');

        


    }
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_id')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');


    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_id', ['id' => $role_id])->row_array();

        $this->db->where('id!=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');


    }

    public function changeAccess() {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data =  [
            'role_id'=>$role_id,
            'menu_id'=>$menu_id

        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);

        }else {
            $this->db->delete('user_access_menu', $data);
        }
        //==================================================
        helper_log("edit", "Mengubah Akses");
        //==================================================

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access change!</div>');
    }

}