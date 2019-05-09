<?php


class Integrantes extends CI_Controller{

    public function index(){
        $this->listar();
    }

    public function listar()
    {
        $this->load->model('Integrantes_model');
        $data['integrantes'] = $this->Integrantes_model->getAll();
        $this->load->view('Header');
        $this->load->view('ListaIntegrantes', $data);
        $this->load->view('Footer');
    }
}