<div class="titulo">Desafio Recursão</div>

<?php

/**
 * $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];
 * > 1
 * > 2
 * >> 3
 * >> 4
 * >> 5
 * > 6 
 * >> 7
 * >>> 8
 * >>> 9
 * > 10
 */

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if(is_array($elemento)) { //Se eu encontrar o Array
            imprimirArray($elemento, $nivel . $nivel[0]); //Faz a recursividade
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
echo "<br>";
imprimirArray($array, '#');

