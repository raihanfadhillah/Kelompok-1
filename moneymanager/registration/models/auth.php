<?php
defined('BASEPATH') or exit('No direct script access allowed');
class auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    function simpan()
    {
        $data =  [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'nama' => htmlspecialchars($this->input->post('name', true))
        ];
        $this->db->insert('tabel_user', $data);
    }
}
