<div class="titulo">Break/Continue</div>

<?php
$cont = 10;
for(;;) {//estrutura vazia de laço
    echo "$cont <br>";
    $cont++;
    if($cont > 20) { //se contador chegar em maior que 20, parar! / break!
        break;
    }
}

echo "<br><hr>";

for(;;) {
    $cont++;
    if($cont % 2 === 1) { //se impar, continue (Mostra par)
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) { // se maior que 30, parar!
        break;
    }
}

foreach(array(1,2,3,4,5,6) as $valor) {
    if($valor === 5) break; //se valor for 5, para!
    if($valor % 2 === 0) continue; // se valor for par, continua (Mostra impar)
    echo "$valor <br>";
}

echo "Fim!";