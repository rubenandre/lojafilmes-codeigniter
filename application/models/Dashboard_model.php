<?php
/**
 * Created by PhpStorm.
 * User: RÃºben Silva
 * Date: 19/08/2018
 * Time: 19:15
 */

class Dashboard_model extends CI_Model
{

    public function getNumberClientes(){
        $this->db->select('*');
        $this->db->from('clientes');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getNumberFilmes(){
        $this->db->select('*');
        $this->db->from('filmes');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getNumberAlugados(){
        $this->db->select('*');
        $this->db->from('data_aluguer');
        $query = $this->db->get();
        return $query->num_rows();
    }

}