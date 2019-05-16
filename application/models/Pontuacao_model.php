<?php

class Pontuacao_model extends CI_Model
{

    public function getProva()
    {
        $this->db->order_by('nome', 'asc');
        $this->db->select('id,nome');
        $query = $this->db->get('prova');
        return $query->result();
    }

    public function getEquipes()
    {
        $this->db->order_by('nome', 'asc');
        $this->db->select('id,nome');
        $query = $this->db->get('equipes');
        return $query->result();
    }
    public function getPontuacaoProva()
    {
        $this->db->select('pontuacao.*,equipes.nome as nomeE,prova.nome as nomeP,usuario.nome as nomeU');
        $this->db->join('equipes', 'equipes.id = pontuacao.id_equipe', 'inner');
        $this->db->join('prova', 'prova.id = pontuacao.id_prova', 'inner');
        $this->db->join('usuario', 'usuario.id = pontuacao.id_usuario', 'inner');
        $this->db->order_by('nomeE', 'asc');
        $this->db->order_by('pontos', 'desc');

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
    public function delete($id)
    {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete('pontuacao');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}
