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

    public function add_contact() {
        $contact_data = array(
            'no_telpon' => $this->input->post('no_telpon'),
            'no_ktp' => $this->input->post('no_ktp'),
            'nama' => $this->input->post('nama')
        );
        $this->Contact_model->insert_contact($contact_data);
        redirect('contacts');
    }

    public function edit_contact($id) {
        $data['contact'] = $this->Contact_model->get_contact_by_id($id);
        $this->load->view('edit_contact_view', $data);
    }

    public function update_contact($id) {
        $contact_data = array(
            'no_telpon' => $this->input->post('no_telpon'),
            'no_ktp' => $this->input->post('no_ktp'),
            'nama' => $this->input->post('nama')
        );
        $this->Contact_model->update_contact($id, $contact_data);
        redirect('contacts');
    }

    public function delete_contact($id) {
        $this->Contact_model->delete_contact($id);
        redirect('contacts');
    }
}
?>
