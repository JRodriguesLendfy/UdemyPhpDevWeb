<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
/* FRUTAS[0] = 'banana'; Não consegue alterar o valor */
/* FRUTAS[] = 'banana'; Não consegue adicionar um array */
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
/* CIDADES[] = 'Rio de Janteiro'; */
echo '<br>' . CIDADES[1];