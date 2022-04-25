<div class="titulo">Foreach</div>

<?php
$array = [
    1 => 'Domingo',
    'Segunda', 
    'Terça', 
    'Quarta', 
    'Quinta', 
    'Sexta', 
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

echo "<hr>";

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<hr>";

foreach ($matrix as $linha) {
   // echo "$linha <br>";
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) { // & pega a referência do valor, por este motivo mostra os $numeros com valor dobrado
    $dobrar *=2;
    echo "$dobrar <br>";
}
print_r($numeros);