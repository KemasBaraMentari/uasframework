<?php

class Contact_model extends CI_Model {

    public function get_all_contacts() {
        return $this->db->get('contacts')->result();
    }

    public function get_contact($id) {
        return $this->db->get_where('contacts', ['id' => $id])->row();
    }

    public function add_contact($data) {
        return $this->db->insert('contacts', $data);
    }

    public function update_contact($id, $data) {
        return $this->db->update('contacts', $data, ['id' => $id]);
    }

    public function delete_contact($id) {
        return $this->db->delete('contacts', ['id' => $id]);
    }
}

