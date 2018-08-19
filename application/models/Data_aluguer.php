<?php
/**
 * Created by PhpStorm.
 * User: RÃºben Silva
 * Date: 19/08/2018
 * Time: 16:10
 */

class Data_aluguer extends CI_Model
{

    public function addAluguer($dados){
        $this->db->insert('data_aluguer', $dados);
    }

    public function getFilmeByCliente($cliente){
        $this->db->select('*');
        $this->db->from('data_aluguer');
        $this->db->where('clientes_id_cliente', $cliente);
        $query = $this->db->get();
        return $query->result();
    }

}