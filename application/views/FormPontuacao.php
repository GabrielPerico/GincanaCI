<div class="container mt-5 pt-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class=" mb-3">Adicionar pontuação</h1>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-6 offset-3 text-center">
            <div class="card">
                <form action="" method="post">
                    <?php
                    ?>
                    <select class="form-control mb-2" name="id_prova" id="id_prova">
                        <option selected disabled>Selecione uma prova</option>
                        <?php
                        if ($prova != null) {
                            foreach ($prova as $p) {
                                echo '<option value="' . $p->id . '">' . $p->nome . '</option>';
                            }
                        } else {
                            echo '<option value="" disabled>Não há Provas cadastrados</option>';
                        }
                        ?>
                    </select>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" width="80%">Equipe</th>
                                <th scope="col" width="20%">Pontuação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($equipe != null) {
                                foreach ($equipe as $e) {
                                    echo '<tr>';
                                    echo '<td width="80%"><input type="hidden" name="id_equipe" value="'.$e->id.'">' . $e->nome . '</td>';
                                    echo '<td width="20%"><input class="form-control" type="text" name="pontos" id="pontos"></td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <button class="btn btn-success pl-3 pr-3 mr-3" type="submit">Enviar</button>
                        <?= (isset($data)) ? '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Integrante/Listar">Cancelar</a>' : '<button class="btn btn-danger" type="reset">Limpar</button>' ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>