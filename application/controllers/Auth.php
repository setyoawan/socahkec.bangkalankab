<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index()
    {   
        //SUPAYA SAAT SUDAH LOGIN TIDAK DAPAT MENGAKSES AUTH
        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'login page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $token = $this->input->post('token');

        //queri builder ci
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $user2 = $this->db->get_where('login_token', ['token' => $token])->row_array();

        if (isset($user,$user2)) {

            $user_token = $this->db->get_where('login_token', ['token' => $token])->row_array();
            //ada usernya
            if ($user['is_active'] == 1) {
                if (time() - $user_token['date_created'] < (60 * 60 *24)) {
                    # code...
                
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id'],
                            'token' => $user2['token']

                        ];

                        //======================================
                        //helper_log("login", "Aktivitas login baru");
                        //======================================

                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('admin');

                        } else {
                            redirect('operator');
                        }

                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password anda salah!</div>');
                        redirect('auth');
                    }

                // TUTUP TOKEN EXPIRED =============================
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Expired, request ulang token !</div>');
                    redirect('auth');
                }
                
            // TUTUP IS ACTIVE====================        
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum di aktivasi !</div>');
                    redirect('auth');
            }
        
        // TUTUP IF ISSET===========
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar atau token tidak valid!</div>');
            redirect('auth');

        }


    }


     //=======================================================================================

     public function getToken()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Token';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/token');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');

            //jika user sudah aktif
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {

                //$token = base64_encode(random_bytes(32));
                $token = random_string('alnum',6);
                $date_created = time();
                
                //$login_token = [
                  //  'useremail' => $email,
                  //  'token' => $token,
                  //  'date_created' => time()  
                //];
                $email = $this->input->post('email');


                //$login_token = [
                    
                  //  'token' => $token,
                    //'date_created' => time() 
                    
                //];

                $this->db->set('token',$token);
                $this->db->set('date_created', $date_created);
                $this->db->where('useremail',$email);
                $this->db->update('login_token');


                //$this->db->update('login_token', $login_token);
                $this->_sendEmail($token, 'getToken');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Cek Email anda untuk mendapatkan token login !</div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered or Not Activated!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }


    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'socahkecamatan@gmail.com', //SI PENGIRIM EMAIL========
            'smtp_pass' => 'socah12345',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);
        $this->load->library('email', $config);

        $this->email->from('socahkecamatan@gmail.com', 'Kecamatan Socah');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification!!!');
            $this->email->message('Click this link to verify your account : <a 
            href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'getToken') {
            $this->email->subject('Token untuk login!!!');
            $this->email->message('Copy token : ' . $token);

                
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    //=======================================================================================


    public function registration()
    {
        //SUPAYA SAAT SUDAH LOGIN TIDAK DAPAT MENGAKSES AUTH
        if ($this->session->userdata('email')) {

            redirect('admin');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'this email has alredy register!'

        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'

        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');

        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()


            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> selamat akun anda sudah terdaftar!</div>');
            redirect('auth');
        }


    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_data');

        //======================================
        //helper_log("logout", "Aktivitas logout baru");
        //======================================


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> anda sudah logout!</div>');
        redirect('auth');


    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

}