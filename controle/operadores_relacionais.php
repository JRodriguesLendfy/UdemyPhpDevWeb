<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); //true
var_dump(1 > 1); //false
var_dump(1 >= 1); //true
var_dump(4 < 23); //true
var_dump(1 <= 7); //true
var_dump(1 != 1); //false
var_dump(1 <> 1);  //false

var_dump(111 == '111'); //Verifica o valor informado = true
var_dump(111 === '111'); //Verifica o valor e o tipo informado (Comparação estrita) = façse
var_dump(111 != '111'); // Verifica a diferença e não confirma que é diferente = false
var_dump(111 !== '111'); // Verifica a diferença, e confirma que é diferente, pois os tipos são diferentes (Comparação estrita) = true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade <  18) {
    echo "Menor de idade = $idade anos<br>";
} elseif ($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>"; //Ordenação de números
var_dump(500 <=> 3); //se o primeiro valor é maior, ele retorna 1
var_dump(50 <=> 50); //se os valores são iguais, ele retorna 0
var_dump(5 <=> 50);  // se o segundo valor é maior, ele retorna -1

echo "<p class='divisao'>Valores podem ser V ou F</p><hr>"; //Identificar se os valores são V ou F
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");


