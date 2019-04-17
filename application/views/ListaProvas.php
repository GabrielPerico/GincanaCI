<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Provas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tempo</th>
                <th>Descrição</th>
                <th>Número de integrantes</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($provas as $p){
                echo '<tr>';
                echo '<td>'.$p->nome.'</td>';
                echo '<td>'.$p->tempo.'</td>';
                echo '<td><textarea cols="30" rows="5">'.$p->descricao.'</textarea></td>';
                echo '<td>'.$p->NIntegrantes.'</td>';
                echo '<td>'
                    . '<a href="'. $this->config->base_url() . 'index.php/Provas/alterar/' . $p->id .'">Alterar</a>'
                    . ' | '
                    . '<a href="'. $this->config->base_url() . 'index.php/Provas/deletar/' . $p->id .'">Deletar</a>';
                echo '</td>';
                echo '</tr>';
            }

            ?>
        </tbody>
    </table>
</body>

</html>