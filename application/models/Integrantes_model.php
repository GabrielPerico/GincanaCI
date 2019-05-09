<?php

class Integrantes_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('integrantes.*,equipes.nome');
        $this->db->join('equipes', 'equipes.id = integrantes.id_equipe', 'inner');
        
        $query = $this->db->get('integrantes');
        return $query->result();
    }
}