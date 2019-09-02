<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

    public function authlogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('nav/header');
            $this->load->view('login/loginn');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->login_model->user($username)->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                echo "cie berhasil";
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    password salah</div>');
                redirect('login/authlogin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            gagal login user tidak ada!</div>');
            redirect('login/authlogin');
        }
    }
}
