<?php
/*Obs.:Caso o dado fosse inserido e não previamente setado, iria inserir um input no index e trazer via POST para o array */

function calcularPorcentagem($estadoNome) {
    
    $estados = 
    [
        'SP' => 67836.43,
        'RJ' => 36678.66,
        'MG' => 29229.88,
        'ES' => 27165.48,
        'Outros' => 19849.53
    ];
    
    $total = array_sum($estados);

    // Calcula a porcentagem
    $estadoValor = $estados[$estadoNome];
    $porcentagem = ($estadoValor / $total) * 100;

    return 
    [
        'valor' => number_format($estadoValor, 2), 
        'porcentagem' => number_format($porcentagem, 2)
    ];
}

// Mostra o valor e a porcentagem do estado
function exibirEstado($estadoNome) {
    $resultado = calcularPorcentagem($estadoNome);
    
    if (is_array($resultado)) {
        echo "Valor de {$estadoNome}: R$ {$resultado['valor']} <br>";
        echo "Porcentagem de {$estadoNome}: {$resultado['porcentagem']}% <br><br>";
    } 
}


exibirEstado('SP');
exibirEstado('RJ');
exibirEstado('MG');
exibirEstado('ES');
exibirEstado('Outros');
















