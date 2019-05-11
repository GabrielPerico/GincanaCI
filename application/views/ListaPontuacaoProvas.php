<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container pt-5">
    <div class="row ">
        <div class="col-12 text-center mb-3">
            <h1>Pontuação Por Prova</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" width="30%">Prova</th>
                            <th scope="col" width="40%">Equipe</th>
                            <th scope="col" width="30%">Pontos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($pontuacao) > 0) {

                            foreach ($pontuacao as $p) {
                                echo '<tr>';
                                echo '<td shape="col" widht="30%">' . $p->nomeP . '</td>';
                                echo '<td shape="col" widht="40%">' . $p->nomeE . '</td>';
                                echo '<td shape="col" widht="30%">' . $p->pontos . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td shape="col" width="100%" colspan="3">Não há pontuação registrada</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>