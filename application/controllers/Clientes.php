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
        $this->load->model('Filmes_model');
        $data['query'] = $this->Clientes_model->getAllClientes();
        $data['filmes'] = $this->Filmes_model->getAllFilmes();
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

    public function editCliente()
    {

        $cliente = $this->input->post('id_cliente');
        $data['editar'] = $this->Clientes_model->getClienteById($cliente);
        $this->load->view('editar', $data);

    }

    public function updateCliente()
    {

        $cliente = array(
            'id_cliente' => $this->input->post('id_cliente'),
            'nome_cliente' => $this->input->post('nome_cliente'),
            'telemovel' => $this->input->post('telemovel'),
            'morada' => $this->input->post('morada')
        );

        $this->Clientes_model->editarCliente($cliente['id_cliente'], $cliente);
        redirect('clientes');


    }

    public function addFilmeToCliente()
    {
        $this->load->model('Data_aluguer');

        $dados = array(
            'data' => $this->input->post('data'),
            'filmes_id_filme' => $this->input->post('filme'),
            'clientes_id_cliente' => $this->input->post('id_c'),
        );

        $this->Data_aluguer->addAluguer($dados);
        redirect(base_url('clientes'));


    }

}