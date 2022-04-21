<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 -2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; //resultado quebrado automaticamente
echo intdiv(7, 4), '<br>'; //resultando inteiro, tira a parte quebrada
echo round(7 / 4), '<br>'; //arredonda para mais
echo 7 % 4, '<br>'; //resto da divisão
echo 7 % 2, '<br>'; //resto da divisão
echo 8 % 2, '<br>'; //resto da divisão
//echo 7 / 0, '<br>'; //dividido por zero causa um warning e informa como valor INFINITO
//echo intdiv(7, 0); #error!
echo 4 ** 2, '<br>'; // 4 elevado a 2 

// Precedência de operadores
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;