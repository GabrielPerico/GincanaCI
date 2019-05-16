<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row ">
        <div class="col-md-12 mb-3">
            <div class="card rounded-0 shadow-lg">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Lista de Equipes</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive shadow">
                        <table class="table table-hover text-center mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" width="50%">Nome da Equipe</th>
                                    <th scope="col" width="50%">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($equipes) > 0) {

                                    foreach ($equipes as $e) {
                                        echo '<tr>';
                                        echo '<td class="align-middle table-cells" width="50%">' . $e->nome . '</td>';
                                        echo '<td class="align-middle table-cells" width="50%">';
                                        echo '<a data-toggle="tooltip" title="Alterar" class="btn btn-outline-primary mr-3" href="' . $this->config->base_url() . 'Equipes/Alterar/' . $e->id . '"><i class="fas fa-pencil-alt"></i></a>';
                                        echo ($e->Integrantes < 1) ?  '<a data-toggle="tooltip" title="Deletar" class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Equipes/Deletar/' . $e->id . '"><i class="fas fa-trash-alt"></i></a>' : '<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Há integrantes cadastrados nessa equipe!"><a class="disabled btn btn-outline-danger" href=""><i class="fas fa-trash-alt"></i></a></span>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td class"align-middle" width="100%" colspan="2">Não há equipes registradas</td></tr>';
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