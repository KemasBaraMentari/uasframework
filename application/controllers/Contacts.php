<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Contact_model');
	}

	public function index() {
		$data['contacts'] = $this->Contact_model->get_all_contacts();
		$this->load->view('contacts_view', $data);
	}

	public function add() {
		$this->load->view('add_contact_view');
	}

	public function edit($id) {
		$data['contact'] = $this->Contact_model->get_contact_by_id($id);
		$this->load->view('edit_contact_view', $data);
	}

	public function delete($id) {
		$this->Contact_model->delete_contact($id);
		redirect('contacts');
	}

	public function save_contact() {
		// Logic to save or update contact
	}
}
?>
