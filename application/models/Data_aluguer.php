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

}