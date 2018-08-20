<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        // Load's necessários
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login(){
        $vendedor = array(
            'nome_vendedor' => $this->input->post('vendedor'),
            'pass_vendedor' => hash('sha512', $this->input->post('password'))
        );

        $data = $this->Login_model->user_login($vendedor['nome_vendedor'], $vendedor['pass_vendedor']);

        if($data) {
            $this->session->set_userdata('login', 'true');
            redirect('dashboard');
        } else {
            $this->session->set_userdata('error_message', 'Utilizador ou senha errados');
            redirect('login');
        }

    }

}