<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container my-5 pt-4">
    <div class="row ">
        <div class="col-md-12 mb-3">
            <div class="card rounded-0 shadow-lg">
                <div class="card-header bg-dark text-center text-white">
                    <h3 class="mb-0">Pontuação por prova</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive shadow">

                        <table class="table table-hover text-center mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" width="30%">Prova</th>
                                    <th scope="col" width="40%">Equipe</th>
                                    <th scope="col" width="20%">Usuario</th>
                                    <th scope="col" width="10%">Pontos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($pontuacao) > 0) {

                                    foreach ($pontuacao as $p) {
                                        echo '<tr>';
                                        echo '<td shape="col" widht="30%">' . $p->nomeP . '</td>';
                                        echo '<td shape="col" widht="40%">' . $p->nomeE . '</td>';
                                        echo '<td shape="col" widht="10%">' . $p->nomeU . '</td>';
                                        echo '<td shape="col" widht="10%">' . $p->pontos . '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td shape="col" width="100%" colspan="4">Não há pontuação registrada</td></tr>';
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