<div class="titulo">Interface</div>

<?php
//interface é utilizada quando você não sabe como demoninar uma função de forma genérica
interface Animal { //Obrigatoriamente, todas as interfaces em PHP precisam ter apenas os métodos
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero { //É possível criar mais de uma interface
    //Canino estende de Animal e Mamífero
    function latir(): string;
    function correr();
}

interface Felino {
    function correr();
}

class Cachorro implements Canino { //Cachorro herda de Canino
    function respirar() { //para chamar a função respirar, é necessário implementar
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar() {
        return "Irei usar leite!";
    }

    function correr() {
        return "vrunnnn!";
    }
}

$animal = new Cachorro();
echo $animal->respirar(),'<br>';
echo $animal->latir(),'<br>';
echo $animal->mamar(),'<br>';
echo $animal->correr(),'<br>';

echo "<br>";
var_dump($animal);

echo "<br>";
var_dump($animal instanceof Cachorro); //Verifica se é uma instância de cachorro
var_dump($animal instanceof Canino); 
var_dump($animal instanceof Mamifero); 
var_dump($animal instanceof Animal); 
var_dump($animal instanceof Felino); 