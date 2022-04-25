<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25, 
    "cor" => "verde", 
    "peso" => 49.8
);

print_r($dados);

var_dump($dados[0]); //Informa que o valor é nulo, pois não existe posição atribuída como 0
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i'; //adicionando um elemento a lista;
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);