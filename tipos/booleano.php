<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false); //determina se é Booleano
echo '<br>' . is_bool('true'); //determina se é Booleano

//Fazer as regras de conversão 
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas zero é false
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.0); 
echo '<br>' . var_dump((bool) 0.000000001); 
echo '<br>' . var_dump((bool) ""); //false
echo '<br>' . var_dump((bool) "0"); //false
echo '<br>' . var_dump((bool) " "); //todo resto é true
echo '<br>' . var_dump((bool) "00"); 
echo '<br>' . var_dump((bool) "false"); 

echo '<br>' . var_dump(!!"false"); 
