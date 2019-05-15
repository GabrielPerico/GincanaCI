<?php


class Provas extends CI_Controller
{

    public function index()
    {
        $this->listar();
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Provas_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    public function listar()
    {
        
        $data['provas'] = $this->Provas_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaProvas', $data);
        $this->load->view('Footer');
    }

    public function cadastrar()
    {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('NIntegrantes', 'NIntegrantes', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Header');
            $this->load->view('FormProvas');
            $this->load->view('Footer');
        } else {
            

            $data = array(
                'nome' => $this->input->post('nome'),
                'tempo' => $this->input->post('tempo'),
                'descricao' => $this->input->post('descricao'),
                'NIntegrantes' => $this->input->post('NIntegrantes')
            );

            if ($this->Provas_model->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Prova cadastrada com sucesso!!!');
                redirect('Provas/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar prova!!!');
                redirect('Provas/cadastrar');
            }
        }
    }

    public function alterar($id)
    {
        if ($id > 0) {
            

            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('tempo', 'tempo', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('NIntegrantes', 'NIntegrantes', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['prova'] = $this->Provas_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormProvas', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'tempo' => $this->input->post('tempo'),
                    'descricao' => $this->input->post('descricao'),
                    'NIntegrantes' => $this->input->post('NIntegrantes')
                );
                if ($this->Provas_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Prova alterada com sucesso!!!');
                    redirect('Provas/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar prova...');
                    redirect('Provas/alterar/' . $id);
                }
            }
        } else {
            redirect('Provas/listar');
        }
    }

    public function deletar($id)
    {
        if ($id > 0) {
            
            if($this->Provas_model->delete($id)){
                $this->session->set_flashdata('mensagem', 'Prova deletada com sucesso!!!');
            }else{
                $this->session->set_flashdata('mensagem', 'Erro ao deletar prova...');
            }
        }
        redirect('Provas/listar');
    }
}
