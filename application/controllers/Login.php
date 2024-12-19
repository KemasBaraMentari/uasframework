<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->User_model->get_user_by_username($username);

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('logged_in', $user);
            redirect('contacts');
        } else {
            $this->session->set_flashdata('error', 'Invalid Username or Password');
            redirect('login');
        }
    }
}
?>
