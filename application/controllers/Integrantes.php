<?php


class Integrantes extends CI_Controller
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
        $this->load->model('Integrantes_model');
        $data['integrantes'] = $this->Integrantes_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaIntegrantes', $data);
        $this->load->view('Footer');
    }

    public function cadastrar()
    {
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('data_nasc', 'data_nasc', 'required');
        $this->form_validation->set_rules('rg', 'rg', 'required');
        $this->form_validation->set_rules('cpf', 'cpf', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->model('Integrantes_model');
            $data['equipes'] = $this->Integrantes_model->getEquipes();
            $this->load->view('Header');
            $this->load->view('FormIntegrantes', $data);
            $this->load->view('Footer');
        } else {
            $this->load->model('Integrantes_model');

            $data = array(
                'nome' => $this->input->post('nome'),
                'id_equipe' => $this->input->post('id_equipe'),
                'data_nasc' => $this->input->post('data_nasc'),
                'rg' => $this->input->post('rg'),
                'cpf' => $this->input->post('cpf')
            );

            if ($this->Integrantes_model->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Integrante cadastrado com sucesso!!!');
                redirect('Integrantes/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar integrante!!!');
                redirect('Integrantes/cadastrar');
            }
        }
    }

    public function alterar($id)
    {
        if ($id > 0) {
            $this->load->model('Integrantes_model');

            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('data_nasc', 'data_nasc', 'required');
            $this->form_validation->set_rules('rg', 'rg', 'required');
            $this->form_validation->set_rules('cpf', 'cpf', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['integrante'] = $this->Integrantes_model->getOne($id);
                $data['equipes'] = $this->Integrantes_model->getEquipes();
                $this->load->view('Header');
                $this->load->view('FormIntegrantes', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'id_equipe' => $this->input->post('id_equipe'),
                    'data_nasc' => $this->input->post('data_nasc'),
                    'rg' => $this->input->post('rg'),
                    'cpf' => $this->input->post('cpf')
                );
                if ($this->Integrantes_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Integrante alterado com sucesso!!!');
                    redirect('Integrantes/Listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar integrante...');
                    redirect('Integrantes/Alterar/' . $id);
                }
            }
        } else {
            redirect('Integrantes/Listar');
        }
    }

    public function deletar($id)
    {
        if ($id > 0) {
            $this->load->model('Integrantes_model');
            if($this->Integrantes_model->delete($id)){
                $this->session->set_flashdata('mensagem', 'Integrante deletado com sucesso!!!');
            }else{
                $this->session->set_flashdata('mensagem', 'Erro ao deletar integrante...');
            }
        }
        redirect('Integrantes/listar');
    }
}
