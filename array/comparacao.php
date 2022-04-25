<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2); //true
var_dump($arr1 === $arr2); //true

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3); //true
var_dump($arr1 === $arr3); //false - Mesmo com todas as informações iguais, a ordem também deve ser igual.
var_dump($arr1 != $arr3); //false
var_dump($arr1 !== $arr3); //true

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4); //true
var_dump($arr1 === $arr4); //false