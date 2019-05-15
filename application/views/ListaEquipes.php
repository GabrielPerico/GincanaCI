<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container pt-5">
    <div class="row ">
        <div class="col-12 text-center mb-3">
            <h1>Lista de Equipes</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover text-center ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" width="50%">Nome</th>
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
                                echo '<a class="btn btn-primary mr-3" href="' . $this->config->base_url() . 'Equipes/Alterar/' . $e->id . '">Alterar</a>';
                                echo ($e->Integrantes < 1) ?  '<a class="btn btn-outline-danger" href="' . $this->config->base_url() . 'Equipes/Deletar/' . $e->id . '">Deletar</a>' : '';
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