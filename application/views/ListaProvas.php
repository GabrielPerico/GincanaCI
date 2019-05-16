<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row ">
        <div class="col-md-12 mb-3">
            <div class="card rounded-0 shadow-lg">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Lista de Provas</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive shadow">

                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" width="20%">Nome</th>
                                    <th scope="col" width="10%">Tempo</th>
                                    <th scope="col" width="40%">Descrição</th>
                                    <th scope="col" width="10%">Número de integrantes</th>
                                    <th scope="col" width="20%">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($provas) > 0) {
                                    foreach ($provas as $p) {
                                        echo '<tr>';
                                        echo '<td class="align-middle table-cells" width="20%">' . $p->nome . '</td>';
                                        echo '<td class="align-middle table-cells" width="10%">' . $p->tempo . '</td>';
                                        echo '<td class="align-middle table-cells" width="40%">' . $p->descricao . '</td>';
                                        echo '<td class="align-middle table-cells" width="10%">' . $p->NIntegrantes . '</td>';
                                        echo '<td class="align-middle table-cells" width="20%">'
                                            . '<a data-toggle="tooltip" title="Alterar" class="btn btn-outline-primary mr-3" href="' . $this->config->base_url() . 'Provas/alterar/' . $p->id . '"><i class="fas fa-pencil-alt"></i></a>'
                                            . '<a data-toggle="tooltip" title="Deletar" class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Provas/deletar/' . $p->id . '"><i class="fas fa-trash-alt"></i></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td class"align-middle" width="100%" colspan="5">Não há provas registrada</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>