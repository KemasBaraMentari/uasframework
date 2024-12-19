<?php

class Contacts extends CI_Controller {
    
    public function index() {
        // Ambil data kontak dari model dan tampilkan di view
        $this->load->model('Contact_model');
        $data['contacts'] = $this->Contact_model->get_all_contacts();
        $this->load->view('contacts_view', $data);
    }

    public function add() {
        if ($this->input->post()) {
            $data = array(
                'no_telpon' => $this->input->post('no_telpon'),
                'no_ktp' => $this->input->post('no_ktp'),
                'nama' => $this->input->post('nama')
            );
            $this->load->model('Contact_model');
            $this->Contact_model->add_contact($data);
            redirect('contacts');
        }
        $this->load->view('add_contact_view');
    }
    

    public function edit($id) {
        $this->load->model('Contact_model');
    
        if ($this->input->post()) {
            $data = array(
                'no_telpon' => $this->input->post('no_telpon'),
                'no_ktp' => $this->input->post('no_ktp'),
                'nama' => $this->input->post('nama')
            );
            $this->Contact_model->update_contact($id, $data);
            redirect('contacts');
        }
    
        $data['contact'] = $this->Contact_model->get_contact($id);
        $this->load->view('edit_contact_view', $data);
    }

    public function delete($id) {
        $this->load->model('Contact_model');
        $this->Contact_model->delete_contact($id);
        redirect('contacts');
    }
    
}
