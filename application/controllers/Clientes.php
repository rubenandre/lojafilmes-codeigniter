<?php

class Clientes extends CI_Controller
{

    public function __construct()
    {
        // Load's necessários
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Clientes_model');
    }

    public function index()
    {
        $data['query'] = $this->Clientes_model->getAllClientes();
        $this->load->view('clientes', $data);
    }

    public function addCliente()
    {
        $cliente = array(
            'nome_cliente' => $this->input->post('nome_cliente'),
            'telemovel' => $this->input->post('telemovel'),
            'morada' => $this->input->post('morada'),
        );

        $this->Clientes_model->addCliente($cliente);
        redirect(base_url('clientes'));

    }

    public function deleteCliente()
    {
        $cliente = $this->input->post('id_cliente');

        $this->Clientes_model->removeCliente($cliente);

        redirect(base_url('clientes'));
    }

}