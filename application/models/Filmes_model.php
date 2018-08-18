<?php

class Filmes_model extends CI_Model
{

    public function getAllFilmes()
    {

        $this->db->select('*');
        $this->db->from('filmes');
        $query = $this->db->get();

        if($query){
            return $query->row_array;
        } else {
            return false;
        }

    }

}