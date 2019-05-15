<?php

class Pontuacao_model extends CI_Model
{

    public function getProva()
    {
        $this->db->select('id,nome');
        $query = $this->db->get('prova');
        return $query->result();
    }

    public function getEquipes()
    {
        $this->db->select('id,nome');
        $query = $this->db->get('equipes');
        return $query->result();
    }
    public function getPontuacaoProva()
    {   
        $this->db->select('sum(pontuacao.pontos) as pontos,equipes.nome as nomeE,prova.nome as nomeP');
        $this->db->join('equipes', 'equipes.id = pontuacao.id_equipe', 'inner');
        $this->db->join('prova', 'prova.id = pontuacao.id_prova', 'inner');
        $this->db->group_by('nomeP,nomeE');
        $this->db->order_by('nomeP', 'desc');
        
        $query = $this->db->get('pontuacao');
        return $query->result();
    }

    public function getAll()
    {
        $this->db->select('pontuacao.*,equipes.nome,sum(pontos) as pontosT');
        $this->db->join('equipes', 'equipes.id = pontuacao.id_equipe', 'inner');
        $this->db->order_by('pontosT', 'desc');
        $this->db->group_by('equipes.nome');
        $query = $this->db->get('pontuacao');
        return $query->result();
    }
    public function insert($data = array())
    {
        $this->db->insert('pontuacao', $data);
        return $this->db->affected_rows();
    }
}
