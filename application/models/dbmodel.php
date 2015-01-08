<?php

class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function store_all_data($data)
    {
        $this->db->insert('survey', $data);
    }
    
    
    
}