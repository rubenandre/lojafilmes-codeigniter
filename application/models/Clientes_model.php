<?php
/**
 * Created by PhpStorm.
 * User: RÃºben Silva
 * Date: 18/08/2018
 * Time: 20:30
 */

class Clientes_model extends CI_Model
{

    public function getAllClientes()
    {

        $this->db->select('*');
        $this->db->from('clientes');
        $query = $this->db->get();

        if($query){
            return $query->result();
        } else {
            return false;
        }

    }

    public function addCliente($cliente)
    {

        $this->db->insert('clientes', $cliente);

    }

    public function editCliente($id)
    {

    }

    public function removeCliente($cliente){
        $this->db->where('id_cliente', $cliente);
        $this->db->delete('clientes');
    }

}