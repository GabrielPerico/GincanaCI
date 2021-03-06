<?php

class Equipes_model extends CI_Model
{


    public function getOne($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('equipes');
        return $query->row();
    }


    public function getAll()
    {
        $this->db->select("equipes.*,(SELECT count(integrantes.id) FROM integrantes WHERE id_equipe = equipes.id) as Integrantes");
        $this->db->order_by('equipes.nome', 'asc');
        
        $query = $this->db->get('equipes');
        return $query->result();
    }

    public function insert($data = array())
    {
        $this->db->insert('equipes', $data);
        return $this->db->affected_rows();
    }

    public function update($id, $data = array())
    {
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update('equipes', $data);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        if ($id > 0) {
            $this->db->where('id_equipe', $id);
            $this->db->delete('pontuacao');
            $this->db->where('id', $id);
            $this->db->delete('equipes');
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}
