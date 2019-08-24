<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->library('form_validation');
    }
    public function regis()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', 'is_unique');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[6]|matches[password1]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required', 'is_unique');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('nav/header');
            $this->load->view('registration/regis', $data);
        } else {
            $this->auth->simpan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Successfully created an account!</div>');
            redirect('registration/regis');
        }
    }
}
