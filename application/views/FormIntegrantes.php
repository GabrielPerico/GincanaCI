<div class="container mt-5 pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class=" mb-3">Cadastrar Integrantes</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6 offset-3 text-center">
            <div class="card">
                <form action="" method="post">
                    <div class="card-body text-left">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" id="nome" value="<?= (isset($integrante)) ? $integrante->nome : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_equipe">Equipe:</label>
                            <select class="form-control" name="id_equipe" id="id_equipe">
                                <option <?= (isset($integrante)) ? 'hidden' : 'selected' ?> disabled>Selecione uma equipe</option>
                                <?php
                                if ($equipes != null) {
                                    foreach ($equipes as $e) {
                                        echo '<option ';
                                        if(isset($integrante) && $e->id == $integrante->id_equipe){
                                            echo 'selected';
                                        }else{
                                            echo '';
                                        }
                                        echo ' value="' . $e->id . '">' . $e->nome . '</option>';
                                    }
                                } else {
                                    echo '<option value="" disabled>Não há times cadastrados</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="data_nasc">Data de Nascimento:</label>
                            <input class="form-control" type="date" name="data_nasc" id="data_nasc" value="<?= (isset($integrante)) ? $integrante->data_nasc : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="rg">RG:</label>
                            <input class="form-control" type="text" name="rg" id="rg" value="<?= (isset($integrante)) ? $integrante->rg : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input class="form-control" type="text" name="cpf" id="cpf" value="<?= (isset($integrante)) ? $integrante->cpf : '' ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success pl-3 pr-3 mr-3" type="submit">Enviar</button>
                        <?= (isset($integrante)) ? '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Integrante/Listar">Cancelar</a>' : '<button class="btn btn-danger" type="reset">Limpar</button>' ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>