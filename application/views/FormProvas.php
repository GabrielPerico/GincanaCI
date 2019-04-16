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
        <input type="text" name="nome" id="nome" value="">
        <br>
        <label for="tempo">Tempo de duração:</label>
        <input type="text" name="tempo" id="tempo">
        <br>
        <label for="descricao">Descrição da prova:</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        <br>
        <label for="NIntegrantes">Número de integrantes</label>
        <input type="text" name="NIntegrantes" id="NIntegrantes">
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>