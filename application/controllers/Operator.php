<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{
   public function __construct()
   {
      
      parent::__construct();
      $this->load->model('m_gallery');
      $this->load->model('m_struktur');
      $this->load->model('m_lakip');
      $this->load->model('m_renstra');
      $this->load->model('m_sopktp');
      $this->load->model('m_sopakta');
      $this->load->model('m_sopsktm');

      is_login();

   }
   public function index()
   {
      $data['title'] = 'My profile';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('operator/index', $data);
      $this->load->view('templates/footer');


   }

   public function edit()
   {

      $data['title'] = 'Edit profile';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('name','Nama','required|trim');


      if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('operator/edit', $data);
      $this->load->view('templates/footer');

      }else {
         $name= $this->input->post('name');
         $email= $this->input->post('email');

         // cek jika ada gambar yang akan di upload

         $upload_image = $_FILES['image']['name'];

         if ($upload_image) {

            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

               $new_image = $this->upload->data('file_name');
               $this->db->set('image', $new_image);
               
            }else {
               echo $this->upload->display_errors();
            }
         }
        //==================================================
        helper_log("add", "Mengedit profile");
        //==================================================

         $this->db->set('name', $name);
         $this->db->where('email', $email);
         $this->db->update('user');
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> profil berhasil di perbaharui!</div>');
            redirect('operator');


      }
   }

    public function struktur()
    {
        $data['title'] = 'Struktur organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operator/struktur', $data);
        $this->load->view('templates/footer');
    }


    public function uploadstruktur()
    {
        $config['upload_path'] = 'assets/img/struktur/';  // folder upload 
        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // jenis file
        $config['max_size'] = 2048;
        $config['max_width'] = 3000;
        $config['max_height'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload , foto maksimal 2 MB';
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $foto = $file['file_name'];
            $judul = $this->input->post('judul');

            $this->m_struktur->insert(array(
                'foto' => $foto,
                'judul' => $judul

            ));

          //==================================================
          helper_log("add", "Mengupload struktur organisasi");
          //==================================================
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto Berhasil di Upload!</div>');
            redirect('operator/struktur');
        }
    }

    public function galeri()
    {
        $data['title'] = 'Foto kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operator/upload-image', $data);
        $this->load->view('templates/footer');
    }

    ////// Upload Galeri
    public function uploadgaleri()
    {
        $config['upload_path'] = 'assets/img/kegiatan/';  // folder upload 
        $config['allowed_types'] = 'gif|jpg|png'; // jenis file
        $config['max_size'] = 2048;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload , foto maksimal 2 MB';
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $foto = $file['file_name'];
            $judul = $this->input->post('judul');

            $this->m_gallery->insert(array(
                'foto' => $foto,
                'judul' => $judul,
                'tgl_foto' => date('Y-m-d-')  

            ));

            //============================================
            helper_log("add", "Mengupload foto kegiatan");
            //============================================
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Foto Berhasil di Posting!</div>');
            redirect('operator/galeri');
        }
    }



    public function lakip()
    {
        $data['title'] = 'Lakip';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operator/lakip', $data);
        $this->load->view('templates/footer');
    }


    public function uploadlakip()
    {
        $config['upload_path'] = 'assets/dokumen/lakip/';  // folder upload 
        $config['allowed_types'] = 'pdf'; // jenis file
        $config['max_size'] = 10048;
        $config['max_width'] = 3000;
        $config['max_height'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('lakip')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload ,jenis file harus extention (dot)pdf dan file maksimal 10 MB';
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $lakip = $file['file_name'];
            $judul = $this->input->post('judul');

            $this->m_lakip->insert(array(
                'lakip' => $lakip,
                'judul' => $judul

            ));

          //==================================================
          helper_log("add", "Mengupload lakip");
          //==================================================
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">File Berhasil di Upload!</div>');
            redirect('operator/lakip');
        }
    }


    public function renstra()
    {
        $data['title'] = 'Renstra';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operator/renstra', $data);
        $this->load->view('templates/footer');
    }


    public function uploadrenstra()
    {
        $config['upload_path'] = 'assets/dokumen/renstra/';  // folder upload 
        $config['allowed_types'] = 'pdf'; // jenis file
        $config['max_size'] = 10048;
        $config['max_width'] = 3000;
        $config['max_height'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('renstra')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload ,jenis file harus extention (dot)pdf dan file maksimal 10 MB';
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $renstra = $file['file_name'];
            $judul = $this->input->post('judul');

            $this->m_renstra->insert(array(
                'renstra' => $renstra,
                'judul' => $judul

            ));

          //==================================================
          helper_log("add", "Mengupload renstra");
          //==================================================
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">File Berhasil di Upload!</div>');
            redirect('operator/renstra');
        }
    }

    /*
    public function ktp()
    {
        $data['title'] = 'SOP Ktp';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operator/sopktp', $data);
        $this->load->view('templates/footer');
    }


    public function uploadsopktp()
    {
        $config['upload_path'] = 'assets/sopktp/';  // folder upload 
        $config['allowed_types'] = 'pdf'; // jenis file
        $config['max_size'] = 10048;
        $config['max_width'] = 3000;
        $config['max_height'] = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('sopktp')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload ,jenis file harus extention (dot)pdf dan file maksimal 10 MB';
        } else {
            //tampung data dari form
            $file = $this->upload->data();
            $sopktp = $file['file_name'];
            $judul = $this->input->post('judul');

            $this->m_sopktp->insert(array(
                'sopktp' => $sopktp,
                'judul' => $judul

            ));

          //==================================================
          helper_log("add", "Mengupload sop ktp");
          //==================================================
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">File Berhasil di Upload!</div>');
            redirect('operator/ktp');
        }
    }
    */


    public function ubahpassword()
    {
        $data['title'] = 'Ubah password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo "Selamat datang " . $data['user']['name'];

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('operator/ubahpassword', $data);
            $this->load->view('templates/footer');
        } else {

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
                redirect('operator/ubahpassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password tak olle padeh bik se abit!</div>');
                    redirect('operator/ubahpassword');
                } else {

                    //Password OK
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil di ubah !</div>');
                    redirect('operator/ubahpassword');
                }
            }
        }
    }
}