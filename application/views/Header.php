<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Gincana</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $this->config->base_url() ?>">Gincana Senac</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a href="#" id="menu" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Provas</a>
                    <div class="dropdown-menu" aria-labelledby="menu">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Provas/Cadastrar' ?>">Cadastrar</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Provas/Listar' ?>">Listar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="menu" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Equipes</a>
                    <div class="dropdown-menu" aria-labelledby="menu">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Equipes/Cadastrar' ?>">Cadastrar</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Equipes/Listar' ?>">Listar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="menu" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Integrantes</a>
                    <div class="dropdown-menu" aria-labelledby="menu">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Integrantes/Cadastrar' ?>">Cadastrar</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Integrantes/Listar' ?>">Listar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="menu" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Pontuação</a>
                    <div class="dropdown-menu" aria-labelledby="menu">
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Pontuacao/Cadastrar' ?>">Adicionar Pontuação</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Pontuacao/Listar' ?>">Pontuação Geral</a>
                        <a class="dropdown-item" href="<?= $this->config->base_url() . 'Pontuacao/listarPorProva' ?>">Pontuação Por Provas</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto text-white">
                <li class="navbar-item">
                    <a href="#" class="nav-link">

                        <i class="fas fa-user-circle mr-1"></i>
                        <?= $this->session->userdata('nome') ?>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-3 text-white">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->config->base_url() . 'Usuario/sair'; ?>">
                        <i class="fas fa-sign-out-alt"></i> Sair
                    </a>
                </li>
            </ul>
        </div>
    </nav>