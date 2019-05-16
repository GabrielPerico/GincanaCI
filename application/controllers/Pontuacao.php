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
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model('Usuario_model');
        $this->load->model('Pontuacao_model');
        $this->Usuario_model->verificaLogin();
    }

    public function listarPorProva()
    {

        $data['pontuacao'] = $this->Pontuacao_model->getPontuacaoProva();

        $this->load->view('Header');
        $this->load->view('ListaPontuacaoProvas', $data);
        $this->load->view('Footer');
    }

    public function listar()
    {

        $data['pontuacao'] = $this->Pontuacao_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaPontuacao', $data);
        $this->load->view('Footer');
    }
    public function cadastrar()
    {
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');

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
    public function deletar($id)
    {
        if ($id > 0) {

            if ($this->Pontuacao_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Pontuação deletada com sucesso!!!');
            } else {
                $this->session->set_flashdata('mensagem', 'Erro ao deletar pontuação...');
            }
        }
        redirect('Pontuacao/ListarPorProva');
    }
}
