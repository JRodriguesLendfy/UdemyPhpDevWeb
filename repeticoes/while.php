<div class="titulo">While / Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

$contador = 0;
do { //do while, a única eestrutura que a expressão vem depois do bloco, e a única que tem ";"
    echo "do-while $contador <br>";
    $contador++; //Pelo menos uma execução está garantida.
} while($contador < VALOR_LIMITE);

$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;
}
