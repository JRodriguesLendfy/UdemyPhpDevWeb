<div class="titulo">Usando Tipos</div>

<?php
ini_set('display_errors', 0 ); //retirar os avisos de "erro"

function somar1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>'; //Informa que o formato não é numérico, mas realiza a soma.

function somar2(int $a, int $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo "<hr>";

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
echo somar2(1, '4dois') . '<br>'; //Informa que o formato não é numérico, mas realiza a soma.

function somar3($a, float $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo "<hr>";

echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>'; //Informa que o formato não é numérico, mas realiza a soma.