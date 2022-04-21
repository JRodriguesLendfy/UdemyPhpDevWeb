<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); //se não estiver no padrão UTF-8, conta como string caractere especial
echo '<br>';

//concatenação

echo "Nos também" . ' somos' . '<br>';
echo ("Número é: " . 123);
echo '<br>' , "Também aceito" , ' vírgulas';

echo '<br>';
echo "'Teste' " . '"Teste"' . '\'Teste\'' . "\"Teste\" " . "\\" ;

print("<br>Também existe a função print");

//Algumas funções
echo '<br>' . strtoupper('maximizando');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('Só a primeira letra');
echo '<br>' . ucwords('Primeira letra de todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Eu também', "utf-8"); //calcula com base no encoding
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // string | posição inicial | tamanho
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso'); // substituir | substituído | string