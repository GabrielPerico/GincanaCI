<?php


class Pontuacao extends CI_Controller
{

    public function index()
    {
        $this->listar();
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    public function listar()
    {
        $this->load->model('Pontuacao_model');
        $data['pontuacao'] = $this->Pontuacao_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaPontuacao', $data);
        $this->load->view('Footer');
    }
    public function cadastrar()
    {
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
        $this->form_validation->set_rules('pontos', 'pontos', 'required');
        $this->load->model('Pontuacao_model');

        if ($this->form_validation->run() == FALSE) {
            $data['equipe'] = $this->Pontuacao_model->getEquipes();
            $data['prova'] = $this->Pontuacao_model->getProva();
            $this->load->view('Header');
            $this->load->view('FormPontuacao', $data);
            $this->load->view('Footer');
        } else {

            $data = array(
                'id_prova' => $this->input->post('id_prova'),
                'id_equipe' => $this->input->post('id_equipe'),
                'pontos' => $this->input->post('pontos')
            );

            if ($this->Pontuacao_model->insert($data)) {
                redirect('Pontuacao/listar');
            } else {
                redirect('Pontuacao/cadastrar');
            }
        }
    }
}
