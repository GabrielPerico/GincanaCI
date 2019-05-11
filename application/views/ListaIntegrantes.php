<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container pt-5">
    <div class="row ">
        <div class="col-12 text-center mb-3">
            <h1>Lista de Integrantes</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="table-responsive">
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
                                    . '<a class="btn btn-primary mr-3" href="' . $this->config->base_url() . 'Integrantes/Alterar/' . $i->id . '">Alterar</a>'
                                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Integrantes/Deletar/' . $i->id . '">Deletar</a>';
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