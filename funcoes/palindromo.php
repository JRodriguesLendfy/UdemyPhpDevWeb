<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) -1; //Verifica a última letra
    for($i = 0; $i <= $ultimoIndice; $i++) { 
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) { //Compara a Primeira e a última letra
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';

echo "<br>";

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não'; //se o contrário da palavra é verdade, preenche com o 'SIM'
    //sttrev inverte a palavra
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';