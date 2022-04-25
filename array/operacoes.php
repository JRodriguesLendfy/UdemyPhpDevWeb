<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); //Confirmar que a variável é um array;
echo '<br>' . count($dadosCompletos); //Quantidade de "campos utilizados" que tem no array;

echo '<br>';
$indice = array_rand($dadosCompletos); //Coleta informação dos dados completos de forma randomica;
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
// echo "$dadosCompletos['idade']"; Forma incorreta
echo "{$dadosCompletos['idade']}"; //Forma correta
echo " ${dadosCompletos['idade']}"; //Segunda alternativa do "$" fora da chave = Forma correta

unset($dadosCompletos["nome"]); //Retira o dado informado
echo '<br>';
print_r($dadosCompletos);

//unset($dadosCompletos); //Apaga tudo que foi informado na lista

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; //Mostra os ultimos valores inseridos, não soma.
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // Junta os dois arrays
echo '<br>';
print_r($decimais);

sort($decimais); //Ordenando os arrays
echo '<br>';
print_r($decimais);



