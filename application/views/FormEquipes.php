<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? ' <div class="alert alert-danger" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container mt-5 pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class=" mb-3">Cadastrar Equipe</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6 offset-3 text-center">
            <div class="card">
                <form action="" method="post">
                    <div class="card-body text-left">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" id="nome" value="<?= (isset($equipe)) ? $equipe->nome : '' ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success pl-3 pr-3 mr-3" type="submit">Enviar</button>
                        <?= (isset($equipe)) ? '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Equipes/Listar">Cancelar</a>' : '<button class="btn btn-danger" type="reset">Limpar</button>' ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>