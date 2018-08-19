<?php

class Filmes_model extends CI_Model
{

    public function getAllFilmes()
    {

        $this->db->select('*');
        $this->db->from('filmes');
        $query = $this->db->get();

        if($query){
            return $query->result();
        } else {
            return false;
        }

    }

    public function addFilme($filme)
    {
        $this->db->insert('filmes', $filme);
    }

    public function getFilmeById($id)
    {
        $this->db->select('*');
        $this->db->from('filmes');
        $this->db->where('id_filme', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function editarFilme($id, $filme)
    {
        $this->db->where('id_filme', $id);
        $this->db->update('filmes', $filme);
    }

    public function deleteFilme($id)
    {
        $this->db->where('id_filme', $id);
        $this->db->delete('filmes');
    }

}