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
$num = $_POST ['numero'];
function calculoFibonacci($num) {
    
    if ($num == 0 || $num == 1) {
        return true;
    }

    $F1 = 0;
    $F2 = 1;

    // Calculando a sequência de Fibonacci até encontrar o número informado
    
    while ($F2 < $num) {
        $temp = $F1 + $F2;
        $F1 = $F2;
        $F2 = $temp;
    }

    return $F2 == $num;
}

if (calculoFibonacci($num)) {
    echo "O número $num pertence à sequência de Fibonacci.";
} else {
    echo "O número $num NÃO pertence à sequência de Fibonacci.";
}
?>
