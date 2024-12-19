<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Fungsi untuk menambahkan pengguna baru
    public function add_user($data) {
        return $this->db->insert('users', $data);
    }

    // Fungsi untuk mengambil data pengguna berdasarkan username
    public function get_user_by_username($username) {
        return $this->db->get_where('users', ['username' => $username])->row();
    }

    // Fungsi untuk update password jika diperlukan
    public function update_password($username, $password_hash) {
        $this->db->where('username', $username);
        return $this->db->update('users', ['password' => $password_hash]);
    }
}
?>
