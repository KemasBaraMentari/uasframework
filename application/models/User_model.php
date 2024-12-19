<?php

class User_model extends CI_Model {
    
    public function get_user_by_username($username) {
    return $this->db->get_where('users', ['username' => $username])->row();
    }
}
