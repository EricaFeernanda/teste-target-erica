<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/estilo.css">
    <link rel="stylesheet" href="../resources/css/testes.css">
    <title>Teste para Target</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Exercício de Teste para Target</h1>
        <h2>Erica Pacheco</h2>
    </header>

</body>
</html>

<?php
//Script coleta a string via POST, inverte e exibe
if (isset($_POST['palavra']) && !empty($_POST['palavra'])) {
    $palavra = $_POST['palavra'];
   
    $invertida = '';
    for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
        $invertida .= $palavra[$i];
    }
    
    echo "<p><strong>Palavra original:</strong> " . htmlspecialchars($palavra) . "</p>";
    echo "<p><strong>Palavra invertida:</strong> " . htmlspecialchars($invertida) . "</p>";
}
?>
