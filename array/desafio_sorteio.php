<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela" ];

echo '<br>';
$princesas = array_rand($nomes); //Coleta informação dos dados completos de forma randomica;
echo "<div center><h1>$nomes[$princesas]</h1></div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>