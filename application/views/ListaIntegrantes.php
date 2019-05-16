<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row ">
        <div class="col-md-12 mb-3">
            <div class="card rounded-0 shadow-lg">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Lista de Integrantes</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive shadow">
                        <table class="table table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" width="20%">Nome</th>
                                    <th scope="col" width="20%">Equipe</th>
                                    <th scope="col" width="20%">Data de Nascimento</th>
                                    <th scope="col" width="10%">CPF</th>
                                    <th scope="col" width="10%">RG</th>
                                    <th scope="col" width="20%">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($integrantes) > 0) {
                                    foreach ($integrantes as $i) {
                                        echo '<tr>';
                                        echo '<td class="align-middle table-cells" width="20%">' . $i->nome . '</td>';
                                        echo '<td class="align-middle table-cells" width="20%">' . $i->nomeE . '</td>';
                                        echo '<td class="align-middle table-cells" width="20%">' . $i->data_nasc . '</td>';
                                        echo '<td class="align-middle table-cells" width="10%">' . $i->cpf . '</td>';
                                        echo '<td class="align-middle table-cells" width="10%">' . $i->rg . '</td>';
                                        echo '<td class="align-middle table-cells" width="20%">'
                                            . '<a data-toggle="tooltip" title="Alterar" class="btn btn-outline-primary mr-3" href="' . $this->config->base_url() . 'Integrantes/Alterar/' . $i->id . '"><i class="fas fa-pencil-alt"></i></a>'
                                            . '<a data-toggle="tooltip" title="Deletar" class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Integrantes/Deletar/' . $i->id . '"><i class="fas fa-trash-alt"></i></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td class="align-middle table-cells" colspan="6" width="100%">Não há integrantes cadastrados</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>