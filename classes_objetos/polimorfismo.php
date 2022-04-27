<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {
    
}

class ArrozAGrega extends Arroz {
    
}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
        //Dentro da classe Comida, tem peso, então é obrigatório que haja peso
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new ArrozAGrega();
$c2->peso = 0.25;

$c2 = new Sorvete();
$c2->peso = 1.5;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comer($c2);

echo $p->peso;