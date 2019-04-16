<?php


class Provas extends CI_Controller
{

    public function index()
    {
        $this->listar();
    }

    public function listar()
    {
        $this->load->model('Provas_model');
        $data['provas'] = $this->Provas_model->getAll();
        $this->load->view('ListaProvas', $data);
    }

    public function cadastrar()
    {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('NIntegrantes', 'NIntegrantes', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('FormProvas');
        } else {
            $this->load->model('Provas_model');

            $data = array(
                'nome' => $this->input->post('nome'),
                'tempo' => $this->input->post('tempo'),
                'descricao' => $this->input->post('descricao'),
                'NIntegrantes' => $this->input->post('NIntegrantes')
            );

            if ($this->Provas_model->insert($data)) {
                redirect('Provas/listar');
            } else {
                redirect('Provas/cadastrar');
            }
        }
    }

    public function alterar($id)
    {
        if ($id > 0) {
            $this->load->model('Provas_model');

            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('tempo', 'tempo', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('NIntegrantes', 'NIntegrantes', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['prova'] = $this->Provas_model->getOne($id);
            } else {
                # code...;
            }
        }
    }
}
