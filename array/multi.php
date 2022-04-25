<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
         [
          "nome" => "Maria",
          "idade" => 25,
          "natralidade" => "Bahia"
         ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]); //removendo o Array, o mesmo não é reordenado.
echo '<br>';
print_r($dados);