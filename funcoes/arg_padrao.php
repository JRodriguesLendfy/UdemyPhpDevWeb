<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(NULL); //retira o primeiro valor padrão
saudacao(NULL, null); //retira os valores padrão
saudacao('Mestre', 'Supremo'); // É alterado $nome e $sobrenome

echo "<hr>";

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer'); //Caso não informe o valor da variável $bebida, carrega o default 'Água';
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

//anotarPedido2('Hamburguer'); //O argumento padrão sempre deve ser o último
anotarPedido2('Refrigerante2', 'Pizza2');