<?php

class Register extends CI_Controller
{

    public function __construct()
    {
        // Load's necessários
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Register_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function registrar()
    {
        $vendedor = array(
            'nome_vendedor' => $this->input->post('vendedor'),
            'pass_vendedor' => hash('sha512', $this->input->post('password'))
        );

        $data = $this->Register_model->check_vendedor($vendedor['nome_vendedor']);

        if($data) {
            $this->Register_model->register_vendedor($vendedor);
            redirect(base_url('login'));
        } else {
            $this->session->set_flashdata('erro', 'Vendedor já existe');
            redirect(base_url('register'));
        }

    }

}