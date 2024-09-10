<?php
//Converte o json em array.
$jsonFile = 'logica/json/faturamento.json';

$jsonContent = file_get_contents($jsonFile);

$faturamento = json_decode($jsonContent, true);

if ($faturamento === null) 
{
    die("Erro ao decodificar o JSON.");
}

$menorValor = PHP_INT_MAX;

//Verifica o menor valor desconsiderando os dia zerados
foreach ($faturamento as $valor) 
{
    if ($valor['valor'] > 0 && $valor['valor'] < $menorValor) 
        {
            $menorValor = $valor['valor'];
            $diadoMenorValor = $valor['dia'];
        }
}

// Verifica se existem valores e exibe valor e o dia respectivo.
if ($menorValor === PHP_FLOAT_MAX) 
{
    echo "Não há valores de faturamento positivos.";
} else {
    echo "O menor valor de faturamento é: $menorValor, no dia $diadoMenorValor." .'<hr>';
}

$maiorValor = PHP_FLOAT_MIN;

foreach($faturamento as $valor)
    {
        if($valor['valor'] > $maiorValor)
        {
            $maiorValor = $valor['valor'];
            $diadoMaiorValor = $valor['dia'];
        }
    }

echo "O maior valor do faturamento é: $maiorValor, no dia $diadoMaiorValor." .'<hr>';

//Verifica a média (Desconsiderando os dias zerados)

$somaValores = 0;
$diasValidos = 0;

foreach ($faturamento as $dia) {
    if ($dia['valor'] > 0) {
        $somaValores += $dia['valor'];
        $diasValidos++;
    }
}

if ($diasValidos > 0) {
    $media = $somaValores / $diasValidos;
    $mediaFormatada = number_format($media, 4, ',', '.');
    echo "A média de faturamento, desconsiderando os dias com faturamento zero, é: $mediaFormatada.";
} else {
    echo "Não há dias com faturamento positivo para calcular a média.";
}
