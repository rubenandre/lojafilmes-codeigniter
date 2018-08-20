<?php

class Register_model extends CI_Model
{

    public function check_vendedor($vendedor)
    {
        $this->db->select('*');
        $this->db->from('vendedores');
        $this->db->where('nome_vendedor', $vendedor);
        $query = $this->db->get();

        if($query->num_rows() > 0){
            return false;
        } else {
            return true;
        }
    }

    public function register_vendedor($vendedor){
        $this->db->insert('vendedores', $vendedor);
    }

}