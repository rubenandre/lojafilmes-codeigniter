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

    public function getClienteById($cliente)
    {
        $this->db->select('*');
        $this->db->from('clientes');
        $this->db->where('id_cliente', $cliente);
        $query = $this->db->get();
        return $query->result();
    }

    public function addCliente($cliente)
    {

        $this->db->insert('clientes', $cliente);

    }

    public function editarCliente($id, $dados)
    {
        $this->db->where('id_cliente', $id);
        $this->db->update('clientes', $dados);
}

    public function removeCliente($cliente){
        $this->db->where('id_cliente', $cliente);
        $this->db->delete('clientes');
    }

}