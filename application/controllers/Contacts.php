<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

    public function index() {
        $data['contacts'] = $this->Contact_model->get_all_contacts();
        $this->load->view('contacts_view', $data);
    }

    public function add() {
        $this->load->view('add_contact_view');
    }

    public function save() {
        $data = $this->input->post();
        $this->Contact_model->insert_contact($data);
        redirect('contacts');
    }

    public function edit($id) {
        $data['contact'] = $this->Contact_model->get_contact($id);
        $this->load->view('edit_contact_view', $data);
    }

    public function update($id) {
        $data = $this->input->post();
        $this->Contact_model->update_contact($id, $data);
        redirect('contacts');
    }

    public function delete($id) {
        $this->Contact_model->delete_contact($id);
        redirect('contacts');
    }
}
