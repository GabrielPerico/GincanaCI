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
                        $count = 1;
                        foreach ($pontuacao as $p) {
                            echo '<tr>';
                            echo '<td class="align-middle table-cells" width="10%">' . $count . '</td>';
                            echo '<td class="align-middle table-cells" width="20%">' . $p->nome . '</td>';
                            echo '<td class="align-middle table-cells" width="70%"><div class="w-auto p-3" style="background-color:';
                            if ($count == 3) {
                                echo '#cd7f32"';
                            } else if ($count == 2) {
                                echo '#C0C0C0"';
                            } else if ($count == 1) {
                                echo '#FFD700"';
                            } else {
                                echo '#eee"';
                            }
                            echo ">";

                            echo $p->pontosT;

                            echo '</div></td></tr>';

                            $count++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>