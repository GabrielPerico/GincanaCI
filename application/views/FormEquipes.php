<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? ' <div class="alert alert-danger" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card rounded-0 shadow-lg">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Cadastro de Equipes</h3>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted text-center py-3">Informe o nome da equipe para o registro no sistema</h6>
                    <form action="" method="post" class="form" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <input placeholder="* Nome" class="form-control form-control-lg rounded-0" type="text" name="nome" id="nome" value="<?= (isset($equipe)) ? $equipe->nome : '' ?>">
                        </div>
                        <div class="form-group py-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="userfile" class="custom-file-input" id="logo">
                                    <label class="custom-file-label" for="logo">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group py-2 text-center">
                            <button class="btn btn-outline-success px-3 mr-3" type="submit">Enviar</button>
                            <?= (isset($equipe)) ? '<a class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Equipes/Listar">Cancelar</a>' : '<button class="btn btn-outline-danger" type="reset">Limpar</button>' ?>
                        </div>
                        <h6 class="card-subtitle mb-2 font-italic font-weight-lighter text-left py-3">* Campo obrigatório</h6>
                    </form>
                </div>
            </div>
        </div>
    </div>