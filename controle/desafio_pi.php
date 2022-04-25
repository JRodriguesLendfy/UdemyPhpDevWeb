<div class="titulo">Desafio PI</div>

<?php
echo pi() . "<br>";

$pi = 3.14;
echo $pi;

if($pi || pi()) {
    echo "<br>Os valores são Iguais!";
} else {
    echo"<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

//resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if ($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
}
if ($piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor Errado';
}