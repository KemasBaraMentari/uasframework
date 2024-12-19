<?php

class Login extends CI_Controller {

public function index() {
    $this->load->view('login_view');
}

public function authenticate() {
    // Load model pengguna
    $this->load->model('User_model');

    // Ambil data dari form login
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // Cek apakah pengguna ada di database
    $user = $this->User_model->get_user_by_username($username);

    // Jika pengguna ditemukan
    if ($user) {
        // Verifikasi password (pastikan password di-hash saat disimpan)
        if (password_verify($password, $user->password)) {
            // Set session data untuk pengguna yang berhasil login
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username);

            // Redirect ke halaman kontak
            redirect('contacts');
        } else {
            // Jika password salah
            $this->session->set_flashdata('error', 'Password salah!');
            redirect('login');
        }
    } else {
        // Jika username tidak ditemukan
        $this->session->set_flashdata('error', 'Username tidak ditemukan!');
        redirect('login');
    }
}

}
