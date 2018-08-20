<?php
/**
 * Created by PhpStorm.
 * User: RÃºben Silva
 * Date: 20/08/2018
 * Time: 22:12
 */

class Login_model extends CI_Model
{

    public function user_login($vendedor, $password)
    {
        $this->db->select('*');
        $this->db->from('vendedores');
        $this->db->where('nome_vendedor', $vendedor);
        $this->db->where('pass_vendedor', $password);
        if($query = $this->db->get())
        {
            return $query->row_array();
        } else {
            return false;
        }
    }

}