<div class="titulo">$_GET</div> 

<?php
echo $_GET; //Apenas para verificar qual o tipo de variável, que no caso é um array.
echo '<br>';
print_r($_GET);
echo "<br>{$_GET['nome']}";
