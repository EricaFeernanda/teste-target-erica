<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/estilo.css">
    <link rel="stylesheet" href="resources/css/testes.css">
    <title>Teste para Target</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Exercício de Teste para Target</h1>
        <h2>Erica Pacheco</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>

</body>
</html>