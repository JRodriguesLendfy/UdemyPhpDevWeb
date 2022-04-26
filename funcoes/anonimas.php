<div class="titulo">Funções Anônimas</div>

<?php
ini_set('display_errors', 0 ); //retirar os avisos de "erro"
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao) { // mostra o numéro $a e $b, operação(+), resultado da função
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);

function divisao($a, $b) {
    return $a / $b;
}

executar(9, 3, '/', divisao);