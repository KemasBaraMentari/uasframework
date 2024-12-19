<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('register_view');
    }

    public function register_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password !== $password_confirm) {
            // Password tidak cocok, kembalikan ke halaman registrasi dengan error message
            $this->session->set_flashdata('error', 'Password confirmation does not match');
            redirect('register');
        }

        // Hash password sebelum menyimpannya ke database
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Siapkan data untuk disimpan
        $user_data = [
            'username' => $username,
            'password' => $password_hash
        ];

        // Masukkan data pengguna ke database
        if ($this->User_model->add_user($user_data)) {
            $this->session->set_flashdata('success', 'Registration successful. Please login.');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', 'Failed to register. Please try again.');
            redirect('register');
        }
    }
}
?>
