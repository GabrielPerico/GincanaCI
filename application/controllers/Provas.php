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
                $this->session->set_flashdata('mensagem', 'Prova cadastrada');
                redirect('Provas/listar');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao cadastrar prova');
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
                $this->load->view('FormProvas', $data);
            } else {
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'tempo' => $this->input->post('tempo'),
                    'descricao' => $this->input->post('descricao'),
                    'NIntegrantes' => $this->input->post('NIntegrantes')
                );
                if ($this->Provas_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Prova alterada');
                    redirect('Provas/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao alterar prova');
                    redirect('Provas/alterar/' . $id);
                }
            }
        } else {
            redirect('Provas/listar');
        }
    }

    public function deletar($id)
    {
        if($id > 0){
            $this->load->model('Provas_model');
            if($this->Provas_model->delete($id)){
                $this->session->set_flashdata('mensagem', 'Prova deletada');
            }else{
                $this->session->set_flashdata('mensagem', 'Falha ao deletar prova');
            }
        }
        redirect('Provas/listar');
     }
}
