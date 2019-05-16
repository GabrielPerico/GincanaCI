<?php

class Integrantes_model extends CI_Model
{
    public function getEquipes(){
        $this->db->order_by('nome', 'asc');
        
        $query = $this->db->get('equipes');
        return $query->result();
    }

    public function getOne($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('integrantes');
        return $query->row();
    }  
    public function getAll()
    {
        $this->db->select('integrantes.*,equipes.nome as nomeE');
        $this->db->join('equipes', 'equipes.id = integrantes.id_equipe', 'inner');
        $this->db->order_by('nomeE,nome', 'asc');
        $query = $this->db->get('integrantes');
        return $query->result();
    }

    public function insert($data = array())
    {
        $this->db->insert('integrantes', $data);
        return $this->db->affected_rows();
    }

    public function update($id, $data = array())
    {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('integrantes', $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('integrantes');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}