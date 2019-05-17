<?php


class Equipes extends CI_Controller
{

    public function index()
    {
        $this->listar();
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Equipes_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    public function listar()
    {
        $data['equipes'] = $this->Equipes_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaEquipes', $data);
        $this->load->view('Footer');
    }

    public function cadastrar()
    {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Header');
            $this->load->view('FormEquipes');
            $this->load->view('Footer');
        } else {


            $data = array(
                'nome' => $this->input->post('nome')
            );

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['encrypt_name']         = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile')) {
                $error = ($this->upload->display_errors());
                $this->session->set_flashdata('mensagem', "$error");
                redirect('Equipes/Listar');
                exit;
            } else {
                $data['imagem'] = $this->upload->data('file_name');
            }

            if ($this->Equipes_model->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Equipe cadastrada com sucesso!!!');
                redirect('Equipes/Listar');
            } else {
                unlink($data['imagem']);
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar equipe!!!');
                redirect('Equipes/Cadastrar');
            }
        }
    }

    public function alterar($id)
    {
        if ($id > 0) {

            $this->form_validation->set_rules('nome', 'nome', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['equipe'] = $this->Equipes_model->getOne($id);
                $this->load->view('Header');
                $this->load->view('FormEquipes', $data);
                $this->load->view('Footer');
            } else {
                $data = array(
                    'nome' => $this->input->post('nome')
                );
                $config['upload_path']          = './application/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile')) {
                    $error = ($this->upload->display_errors());
                    $this->session->set_flashdata('mensagem', "$error");
                    redirect('Equipes/Listar');
                    exit;
                } else {
                    $data['imagem'] = $this->upload->data('file_name');
                }
                if ($this->Equipes_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Equipe alterada com sucesso!!!');
                    redirect('Equipes/Listar');
                } else {
                    unlink($data['imagem']);
                    $this->session->set_flashdata('mensagem', 'Erro ao alterar equipe...');
                    redirect('Equipes/Alterar/' . $id);
                }
            }
        } else {
            redirect('Equipes/Listar');
        }
    }

    public function deletar($id)
    {
        if ($id > 0) {
            $equipe = $this->Equipes_model->getOne($id);
            if ($equipe) {
                unlink('./uploads/' . $equipe->imagem);
                if ($this->Equipes_model->delete($id)) {
                    $this->session->set_flashdata('mensagem', 'Equipe deletada com sucesso!!!');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao deletar equipe...');
                }
            }
        }
        redirect('Equipes/listar');
    }
}
