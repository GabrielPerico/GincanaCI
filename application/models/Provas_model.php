<?php

class Provas_model extends CI_Model{
    
    public function getOne($id){
        
    }
    public function getAll(){
        $query = $this->db->get('prova');
        return $query->result();
    }

    public function insert($data = array()){
        $this->db->insert('prova', $data);
        return $this->db->affected_rows();
    }
}