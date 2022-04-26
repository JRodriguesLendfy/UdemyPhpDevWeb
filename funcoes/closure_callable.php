<div class="titulo">Closure & Callable</div>

<?php
ini_set('display_errors', 0 ); //retirar os avisos de "erro"

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2 ($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . "<br>"; //É um Callable, pois está apontado para a função, está sendo chamado/Invocado.

echo soma2(2, 3) . ' ';
echo (is_callable(soma2) ? 'Sim' : 'Não') . "<br>"; //É um Callable, pois está apontado para a função, está sendo chamado/Invocado.

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo "<br>";

executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', soma2);

function executar2($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo "<br>";

executar2(100, 100, '+', $soma1);
executar2(300, 300, '+', soma2);


