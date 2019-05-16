<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? ' <div class="alert alert-danger" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card rounded-0 shadow-lg">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Cadastro de Provas</h3>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted text-center py-3">Informe os dados da prova para o registro no sistema</h6>
                    <form action="" method="post">
                        <div class="form-group py-2" class="form">
                            <input placeholder="* Nome" class="form-control form-control-lg rounded-0" type="text" name="nome" id="nome" value="<?= (isset($prova)) ? $prova->nome : '' ?>">
                        </div>
                        <div class="form-group py-2">
                            <input placeholder="Tempo de duração" class="form-control form-control-lg rounded-0" type="text" name="tempo" id="tempo" value="<?= (isset($prova)) ? $prova->tempo : '' ?>">
                        </div>
                        <div class="form-group py-2">
                            <textarea placeholder="* Descrição"class="form-control form-control-lg rounded-0" name="descricao" id="descricao" cols="30" rows="10"><?= (isset($prova)) ? $prova->descricao : '' ?></textarea>
                        </div>
                        <div class="form-group py-2">
                            <input placeholder="Número de integrantes"class="form-control form-control-lg rounded-0" type="text" name="NIntegrantes" id="NIntegrantes" value="<?= (isset($prova)) ? $prova->NIntegrantes : '' ?>">
                        </div>
                        <hr>
                        <div class="form-group py-2 text-center">
                            <button class="btn btn-outline-success px-3 mr-3" type="submit">Enviar</button>
                            <?= (isset($prova)) ? '<a class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Provas/Listar">Cancelar</a>' : '<button class="btn btn-outline-danger" type="reset">Limpar</button>' ?>
                        </div>
                        <h6 class="card-subtitle mb-2 font-italic font-weight-lighter text-left py-3">* Campo obrigatório</h6>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>