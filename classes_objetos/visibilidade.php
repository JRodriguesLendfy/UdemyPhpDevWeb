<div class="titulo">Visibilidade</div>

<?php
ini_set('display_errors', 0 );
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar(); está encpsulada

class B extends A {
    public function mostrarB() { //Não irá aparecer o privado, pois só pode ser transmitido dentro de sua própria classe
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca(); //Só pode ser acessado dentro da classe
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
