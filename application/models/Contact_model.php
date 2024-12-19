<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function get_all_contacts() {
        return $this->db->get('contacts')->result();
    }

    public function get_contact_by_id($id) {
        return $this->db->get_where('contacts', array('id' => $id))->row();
    }

    public function insert_contact($data) {
        $this->db->insert('contacts', $data);
    }

    public function update_contact($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('contacts', $data);
    }

    public function delete_contact($id) {
        $this->db->where('id', $id);
        $this->db->delete('contacts');
    }
}
?>
