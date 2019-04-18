<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <h1 class="navbar-brand">Gincana de algum lugar</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->config->base_url() . '/index.php/provas/cadastrar' ?>">Cadastrar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $this->config->base_url() . '/index.php/provas/listar' ?>">Lista</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5 pt-4">
        <div class="row ">
            <div class="col-12 text-center mb-3">
                <h1>Lista de Provas</h1>
            </div>
        </div>
        <div class="row mb-5">
            <table class="table table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tempo</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Número de integrantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($provas as $p) {
                        echo '<tr>';
                        echo '<td class="align-middle">' . $p->nome . '</td>';
                        echo '<td class="align-middle">' . $p->tempo . '</td>';
                        echo '<td class="align-middle"><textarea class="md-textarea form-control" disabled cols="30" rows="5">' . $p->descricao . '</textarea></td>';
                        echo '<td class="align-middle">' . $p->NIntegrantes . '</td>';
                        echo '<td class="align-middle">'
                            . '<a class="btn btn-primary mr-3" href="' . $this->config->base_url() . 'index.php/Provas/alterar/' . $p->id . '">Alterar</a>'
                            . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Provas/deletar/' . $p->id . '">Deletar</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>