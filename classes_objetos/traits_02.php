<div class="titulo">Traits #02</div>

<?php
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor{ //resolução de conflitos utilizando o insteadOf
        validacaoMelhor::validarString insteadOf validacao;
        //validacao::validarString insteadOf validacaoMelhor ;

        validacao::validarString as validacaoSimples; //Mudança do nome do método
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));