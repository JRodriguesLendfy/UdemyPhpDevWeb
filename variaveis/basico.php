<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
vaR_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros); //verificar se a variável está setada

unset($somaDosNumeros);//tirar o valor que está setado
//var_dump($somaDosNumeros); //Retorna nulo, e informa que a variável não foi definida, devido a utilização do unset 

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

//nomes de variável
$var = 'valida';
$var2 = 'valida'; //Pode usar camelcase, uppercase, caixa alta, o importante é trabalhar de forma consistente no projeto.
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //evitar
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
