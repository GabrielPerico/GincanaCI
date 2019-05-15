<?php
$mensagem = $this->session->flashdata('mensagem');
echo (isset($mensagem) ? '<div class="alert alert-success" role="alert">' . $mensagem . '</div>' : '');
?>
<div class="container pt-5">
    <div class="row ">
        <div class="col-12 text-center mb-3">
            <h1>Pontuação Geral</h1>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover text-center ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" width="10%">Colocação</th>
                            <th scope="col" width="20%">Equipe</th>
                            <th scope="col" width="70%">Pontuação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($pontuacao) > 0) {
                            $count = 1;
                            $lastPnt = 0;
                            foreach ($pontuacao as $p) {
                                if ($lastPnt == $p->pontosT) {
                                    $count--;
                                };
                                echo '<tr>';
                                echo '<td class="align-middle table-cells" width="10%">' . $count . '</td>';
                                echo '<td class="align-middle table-cells" width="20%">' . $p->nome . '</td>';
                                echo '<td class="align-middle table-cells" width="70%">';
                                echo '<div class="w-auto p-3 text-left align-center" style="background-color:';
                                if ($count == 3) {
                                    echo '#cd7f32">';
                                } else if ($count == 2) {
                                    echo '#C0C0C0">';
                                } else if ($count == 1) {
                                    echo '#FFD700">';
                                } else {
                                    echo '#eee">';
                                }
                                echo '<div class="row">';
                                echo '<i class="fas fa-trophy h1 m-auto col-5   " style="color:';
                                if ($count == 3) {
                                    echo '#b9722d">';
                                } else if ($count == 2) {
                                    echo '#A9A9A9">';
                                } else if ($count == 1) {
                                    echo '#DAA520">';
                                } else {
                                    echo '">';
                                }
                                echo '</i>';
                                echo '<div class="col-7 pl-5 text-left align-center">';
                                echo $p->pontosT;
                                echo '</div>';
                                echo '</div>';

                                echo '</div></td></tr>';
                                $lastPnt = $p->pontosT;
                                $count++;
                            }
                        } else {
                            echo '<tr><td class"align-middle" width="100%" colspan="3">Não há pontuação registrada</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>