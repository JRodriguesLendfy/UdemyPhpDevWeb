<div class="titulo">Recursividade</div>

<?php 
function somaUmAte($numero) {
    $soma = 0;
    for($i = 0; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';
//usando if else
function somaRecursivaUmAte($numero) {
    //condição de Parada!
    if($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(15). '<br>';

//usando operador ternário
function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : //se condição de parada é 1, ele retorna 1, e começa a resolver todo o problema
    $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150). '<br>';