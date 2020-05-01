<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        is_login();

    }
    public function index()
    {
        $data['title'] = 'Menu management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        //RESULT ARRAY UNTUK MENAMPILKAN BANYAK DATA KALO ROW ARRAY CUMAN SATU BARIS
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');

        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil di tambahkan</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'SubMenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                                        //ALIAS
        $this->load->model('Menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');

        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SubMenu baru berhasil di tambahkan</div>');
            redirect('menu/submenu');
        }

    }
    
     //NGOBAR ===================================================================================================
    public function edit($id) {

        $where = array('id' => $id);
        $data['submenu'] = $this->menu_model->menuid($id);

        $data['title'] = 'Edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/sm_edit', $data);
        $this->load->view('templates/footer');
        
    }

    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('title');
        $menu = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $is_active = $this->input->post('is_active');


        

        $data = array(
            'title' => $judul,
            'menu_id' => $menu,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $is_active            
        );


        $where = array(
            'id' => $id
        );
        //======================================
        helper_log("edit", "Mengedit sub menu");
        //======================================

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
        redirect('menu/submenu');

    }


    //NGOBAR ===================================================================================================
    

}