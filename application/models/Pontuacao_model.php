<?php

class Pontuacao_model extends CI_Model
{

    public function getProva(){
        $this->db->select('id,nome');
        $query = $this->db->get('prova');
        return $query->result();
    }
    
    public function getEquipes(){
        $this->db->select('id,nome');
        $query = $this->db->get('equipes');
        return $query->result();
    }

    public function getAll()
    {
        $this->db->select('pontuacao.*,equipes.nome,sum(pontos) as pontosT');
        $this->db->join('equipes', 'equipes.id = pontuacao.id_equipe', 'inner');
        $this->db->order_by('pontos', 'desc');
        $this->db->group_by('nome');
        $query = $this->db->get('pontuacao');
        return $query->result();
    }
    public function insert($data = array())
    {
        $this->db->insert('pontuacao', $data);
        return $this->db->affected_rows();
    }
}
