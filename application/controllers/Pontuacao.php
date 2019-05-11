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

    public function listarPorProva()
    {
        $this->load->model('Pontuacao_model');
        $data['pontuacao'] = $this->Pontuacao_model->getPontuacaoProva();

        $this->load->view('Header');
        $this->load->view('ListaPontuacaoProvas', $data);
        $this->load->view('Footer');
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
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
        $this->load->model('Pontuacao_model');

        if ($this->form_validation->run() == FALSE) {
            $data['equipe'] = $this->Pontuacao_model->getEquipes();
            $data['prova'] = $this->Pontuacao_model->getProva();
            $this->load->view('Header');
            $this->load->view('FormPontuacao', $data);
            $this->load->view('Footer');
        } else {
            if (count($this->input->post("pontos[]")) > 0) {
                foreach ($this->input->post('pontos[]') as $k => $v) {
                    $data[] = array(
                        'pontos' => $this->input->post("pontos[$k]"),
                        'id_equipe' => $this->input->post("id_equipe[$k]"),
                        'id_prova' => $this->input->post('id_prova'),
                        'id_usuario' => $this->session->userdata('idUsuario'),
                        'data_hora' => date('Y-m-d H:i:s')
                        
                    );
                    $funciono = $this->Pontuacao_model->insert($data[$k]);
                }
                if ($funciono) {
                    $this->session->set_flashdata('mensagem', 'Pontuação cadastrada com sucesso!!!');
                    redirect('Pontuacao/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Erro ao cadastrar pontuação!!!');
                    redirect('Pontuacao/cadastrar');
                }
            }
        }
    }
}
