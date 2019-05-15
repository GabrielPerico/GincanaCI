<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? ' <div class="alert alert-danger" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card rounded-0">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Cadastro de Integrantes</h3>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted text-center py-3">Informe os dados do integrante para o registro no sistema</h6>
                    <form action="" method="post" class="form">
                        <div class="form-group py-2">
                            <input placeholder="* Nome" class="form-control form-control-lg rounded-0" type="text" name="nome" id="nome" value="<?= (isset($integrante)) ? $integrante->nome : '' ?>">
                        </div>
                        <div class="form-group py-2">
                            <select class="form-control form-control-lg rounded-0" name="id_equipe" id="id_equipe">
                                <option <?= (isset($integrante)) ? '' : 'selected' ?> hidden disabled>* Selecione uma equipe</option>
                                <?php
                                if (count($equipes) > 0) {
                                    foreach ($equipes as $e) {
                                        echo '<option ';
                                        (isset($integrante) && $e->id == $integrante->id_equipe) ? 'selected' : '';
                                        echo ' value="' . $e->id . '">' . $e->nome . '</option>';
                                    }
                                } else {
                                    echo '<option value="" disabled>Não há equipes cadastradas</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <input placeholder="Data de nascimento" onblur="(this.type='text')" onfocus="(this.type='date')" class="form-control form-control-lg rounded-0" type="text" name="data_nasc" id="data_nasc" value="<?= (isset($integrante)) ? $integrante->data_nasc : '' ?>">
                        </div>
                        <div class="form-group py-2">
                            <input placeholder="RG" class="form-control form-control-lg rounded-0" type="text" name="rg" id="rg" value="<?= (isset($integrante)) ? $integrante->rg : '' ?>">
                        </div>
                        <div class="form-group py-2">
                            <input placeholder="CPF" class="form-control form-control-lg rounded-0" type="text" name="cpf" id="cpf" value="<?= (isset($integrante)) ? $integrante->cpf : '' ?>">
                        </div>
                        <hr>
                        <div class="form-group py-2 text-center">
                            <button class="btn btn-outline-success px-3 mr-3" type="submit">Enviar</button>
                            <?= (isset($integrante)) ? '<a class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Integrante/Listar">Cancelar</a>' : '<button class="btn btn-outline-danger" type="reset">Limpar</button>' ?>
                        </div>
                        <h6 class="card-subtitle mb-2 font-italic font-weight-lighter text-left py-3">* Campo obrigatório</h6>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>