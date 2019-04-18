<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro de Provas</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class=" mb-3">Cadastrar Prova</h1>
                <?= (isset($prova)) ? '' : '<a class="btn btn-info mb-1" href="' . $this->config->base_url() . 'index.php' . '">Voltar as ações</a><br><br> ' ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4 text-center">
                <div class="card">
                    <form action="" method="post">
                        <div class="card-body text-left">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input class="form-control" type="text" name="nome" id="nome" value="<?= (isset($prova)) ? $prova->nome : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="tempo">Tempo de duração:</label>
                                <input class="form-control" type="text" name="tempo" id="tempo" value="<?= (isset($prova)) ? $prova->tempo : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição da prova:</label>
                                <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"><?= (isset($prova)) ? $prova->descricao : '' ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="NIntegrantes">Número de integrantes</label>
                                <input class="form-control" type="text" name="NIntegrantes" id="NIntegrantes" value="<?= (isset($prova)) ? $prova->NIntegrantes : '' ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success pl-3 pr-3 mr-3" type="submit">Enviar</button>
                            <?= (isset($prova)) ? '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/provas/listar">Cancelar</a>' : '<button class="btn btn-danger" type="reset">Limpar</button>' ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>