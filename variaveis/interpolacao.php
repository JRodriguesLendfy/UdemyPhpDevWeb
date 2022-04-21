<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; //aspas simples
echo "<br> $numero"; //aspas duplas

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
//echo "<br> Eu tenho 5 $objetos"; Aparece apenas o texto, sem a varíavel definida.
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; //diferença entre espaços dentro das chaves
