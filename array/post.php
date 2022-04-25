<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="SP">São Paulo</option>
        <option value="MG">Minas Gerais</option>
        <option value="RJ">Rio de Janeiro</option>
    </select>
    <button>Enviar </button>
</form>

<style>
    form > * {
        font-style: 1.8rem;
    }
</style>

<?php

print_r($_GET); //Os campos de INPUT
echo '<br>';
print_r($_POST); //Guarda as informações postadas 
echo '<br>' . count($_POST); //Quantidade de informações no POST
