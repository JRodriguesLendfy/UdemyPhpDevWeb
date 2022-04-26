<div class="titulo">Argumentos & Retorno </div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!'; //É necessário chamar através do echo, ou definir como uma variável que também deverá ser chamada de Echo!
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Tiago');

function soma ($a, $b) {
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor) { //Não é possível trocar o valor, o PHP passa o valor por copia, não por referência.
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor) { //Como a variável foi referenciada com o "&", foi possível efetuar a troca.
    $a = $novoValor;
}
//Se estiver trabalhando com paradigma de programação funcional, deve ser evitado.

trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;