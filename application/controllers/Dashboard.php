<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        // Load's necessários
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Dashboard_model');
        $this->load->library('session');
    }

    public function index()
    {
        $dados['numFilmes'] = $this->Dashboard_model->getNumberFilmes();
        $dados['numClientes'] = $this->Dashboard_model->getNumberClientes();
        $dados['numAlugados'] = $this->Dashboard_model->getNumberAlugados();
        $this->load->view('dashboard', $dados);
    }

    public function logout()
    {
        $this->session->set_userdata('login', null);
        redirect(base_url('login'));
    }

}