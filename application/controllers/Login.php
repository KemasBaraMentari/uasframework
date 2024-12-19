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

	public function register() {
		$this->load->view('register_view');
	}

	public function authenticate() {
		// Auth logic here
	}

	public function do_register() {
		// Registration logic here
	}
}
?>
