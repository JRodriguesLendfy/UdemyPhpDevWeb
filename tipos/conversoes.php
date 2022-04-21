<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX); //Verifica se o valor é inteiro

//int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

//float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.8)); //arrdonda int para menos
echo '<br>';
var_dump((int) round(2.8)); //arredonda int para mais

//Operações com string
echo '<p>String</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
//echo '<br>', is_string("3" + 2);
echo '<br>';
/* var_dump(1 + "cinco"); PHP identifica que existem valores não numéricos
echo '<br>';
var_dump(1 + "5 cinco"); */
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump ((float) "10.5");