<?php
class login_model extends CI_Model
{
    function user($username)
    {
        $query = $this->db->query("SELECT * FROM tabel_user WHERE username='$username'");
        return $query;
    }
}
