<div class="container pt-5">
    <div class="row ">
        <div class="col-12 text-center mb-3">
            <h1>Lista de Provas</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="table-responsive">
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
                        foreach ($provas as $p) {
                            echo '<tr>';
                            echo '<td class="align-middle table-cells" width="20%">' . $p->nome . '</td>';
                            echo '<td class="align-middle table-cells" width="10%">' . $p->tempo . '</td>';
                            echo '<td class="align-middle table-cells" width="40%">' . $p->descricao . '</td>';
                            echo '<td class="align-middle table-cells" width="10%">' . $p->NIntegrantes . '</td>';
                            echo '<td class="align-middle table-cells" width="20%">'
                                . '<a class="btn btn-primary mr-3" href="' . $this->config->base_url() . 'Provas/alterar/' . $p->id . '">Alterar</a>'
                                . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'Provas/deletar/' . $p->id . '">Deletar</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>