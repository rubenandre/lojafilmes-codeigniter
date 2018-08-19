<?php

class Filmes extends CI_Controller
{

    public function __construct()
    {
        // Load's necessários
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Filmes_model');
    }

    public function index()
    {
        $dados['query'] = $this->Filmes_model->getAllFilmes();
        $this->load->view('filmes', $dados);
    }

    public function addFilme()
    {
        $filme = array(
            'nome_filme' => $this->input->post('nome_filme'),
            'ano_filme'  => $this->input->post('ano_filme')
        );

        $this->Filmes_model->addFilme($filme);
        redirect(base_url('filmes'));
    }

    public function editFilme()
    {

        $id_filme = $this->input->post('id_filme');
        $data['editar'] = $this->Filmes_model->getFilmeById($id_filme);
        $this->load->view('editarFilme', $data);

    }

    public function updateFilme(){
        $id_filme = $this->input->post('id_filme');

        $filme = array(
            'nome_filme' => $this->input->post('nome_filme'),
            'ano_filme'  => $this->input->post('ano_filme')
        );

        $this->Filmes_model->editarFilme($id_filme, $filme);
        redirect(base_url('filmes'));

    }

    public function deleteFilme()
    {

        $id_filme = $this->input->post('id_filme');
        $this->Filmes_model->deleteFilme($id_filme);

        redirect(base_url('filmes'));

    }



}