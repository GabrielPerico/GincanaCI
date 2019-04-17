<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Provas</title>
</head>

<body>
    <h1>Cadastrar Prova</h1>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <br>
        <input type="text" name="nome" id="nome" value="<?= (isset($prova)) ? $prova->nome : '' ?>">
        <br><br>
        <label for="tempo">Tempo de duração:</label>
        <br>
        <input type="text" name="tempo" id="tempo" value="<?= (isset($prova)) ? $prova->tempo : '' ?>">
        <br><br>
        <label for="descricao">Descrição da prova:</label>
        <br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?= (isset($prova)) ? $prova->descricao : '' ?></textarea>
        <br><br>
        <label for="NIntegrantes">Número de integrantes</label>
        <br>
        <input type="text" name="NIntegrantes" id="NIntegrantes" value="<?= (isset($prova)) ? $prova->NIntegrantes : '' ?>">
        <hr>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>