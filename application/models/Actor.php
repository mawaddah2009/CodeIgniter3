<?php

class Actor extends CI_Model {
    function insert($data){
        $this->db->insert('actor', $data);
    }
    function listing() {
        //list all actor
       // $rows = $this->db->get('actor');
       $query = $this->db->get('actor');
       return $query->result_array();
        return $rows;

    }
}