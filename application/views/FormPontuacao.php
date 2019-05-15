<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? ' <div class="alert alert-danger" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container mt-5 pt-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card rounded-0">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Adicionar Pontuação</h3>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted text-center py-3">Informe a prova e pontuação das equipes para o registro no sistema</h6>
                    <form action="" method="post">
                        <div class="form-group">

                            <table class="table table-bordered">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col" width="100%" colspan="2">Provas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <select class="form-control form-control-lg rounded-0" name="id_prova" id="id_prova">
                                                <option hidden selected disabled>* Selecione uma prova</option>
                                                <?php
                                                if (count($prova) > 0) {
                                                    foreach ($prova as $p) {
                                                        echo '<option value="' . $p->id . '">' . $p->nome . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="" disabled>Não há Provas cadastradas</option>';
                                                }
                                                ?>
                                        </td>
                                        </select>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">

                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" width="70%">Equipe</th>
                                        <th scope="col" width="30%">* Pontuação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($equipe != null) {
                                        foreach ($equipe as $e) {
                                            echo '<tr>';
                                            echo '<td width="70%" class="align-middle"><input type="hidden" name="id_equipe[]" value="' . $e->id . '">' . $e->nome . '</td>';
                                            echo '<td width="30%"><input class="form-control form-control-lg rounded-0" type="text" name="pontos[]" id="pontos"></td>';
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<tr><td width="100%" colspan="2">Não há equipes para o registro de pontuação</td></tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button class="btn btn-outline-success pl-3 pr-3 mr-3" type="submit">Enviar</button>
                            <?= (isset($data)) ? '<a class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Integrante/Listar">Cancelar</a>' : '<button class="btn btn-outline-danger" type="reset">Limpar</button>' ?>
                        </div>
                        <h6 class="card-subtitle mb-2 font-italic font-weight-lighter text-left py-3">* Campo obrigatório</h6>
                    </form>
                </div>
            </div>
        </div>
    </div>