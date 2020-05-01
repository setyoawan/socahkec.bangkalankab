<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->library('form_validation');
   }

   public function index()
   {
      $data['title'] = 'Kecamatan Socah';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/index', $data);
      //$this->load->view('templates/user_footer');
   }
   public function layanan1()
   {

      $data['title'] = 'layanan Socah';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/layanan1', $data);
      //$this->load->view('templates/user_footer');
   }
   public function layanan2()
   {

      $data['title'] = 'layanan Socah';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/layanan2', $data);
      //$this->load->view('templates/user_footer');
   }
   public function layanan3()
   {

      $data['title'] = 'layanan Socah';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/layanan3', $data);
      //$this->load->view('templates/user_footer');
   }
   public function struktur()
   {

      $data['title'] = 'Struktur Organisasi';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/struktur', $data);
      //$this->load->view('templates/user_footer');
   }

   public function lakip()
   {

      $data['title'] = 'lakip renstra';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/lakip', $data);
      //$this->load->view('templates/user_footer');
   }

   //public function semuaberita(){
   //   $data['title'] = 'Berita Socah';
      //$this->load->view('templates/user_header', $data);
   //   $this->load->view('user/semuaberita', $data);
      //$this->load->view('templates/user_footer');
   

   //}

   public function semuaartikelkegiatan(){
      $data['title'] = 'artikel Kegiatan Socah';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/semuaartikelKegiatan', $data);
      //$this->load->view('templates/user_footer');
   }

   public function semuagallery(){
      $data['title'] = 'Gallery Socah';
      //$this->load->view('templates/user_header', $data);
      $this->load->view('user/semuagallery', $data);
      //$this->load->view('templates/user_footer');
   }
   /*
   public function sejarah()
   {

      $data['title'] = 'Sejarah';
      $this->load->view('templates/user_header', $data);
      $this->load->view('user/sejarah');
      $this->load->view('templates/user_footer');
   }
   public function petalokasi()
   {

      $data['title'] = 'Peta Lokasi';
      $this->load->view('templates/user_header', $data);
      $this->load->view('user/peta-lokasi');
      $this->load->view('templates/user_footer');
   }
   
   public function kritiksaran()
   {
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[6]', [
         'min_length' => 'Nama minimal 6 karakter!'
      ]);

      $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[6]', [
         'min_length' => 'Alamat minimal 6 karakter!'
      ]);
      $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

      if ($this->form_validation->run() == false) {
         $data['title'] = 'Kecamatan Socah';
         $this->load->view('templates/user_header', $data);
         $this->load->view('user/index');
         $this->load->view('templates/user_footer');

      } else {
         $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'email' => htmlspecialchars($this->input->post('email')),
            'kritiksaran' => htmlspecialchars($this->input->post('kritiksaran'))
         ];

         $this->db->insert('kritik_saran', $data);
         //paksa masukkan css dalam format 
         $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="margin-right:11px;margin-left:11px;"> Terimakasih !! Kritik dan Saran anda sudah terkirim</div>');
         redirect('user');

      }


   }

*/
}