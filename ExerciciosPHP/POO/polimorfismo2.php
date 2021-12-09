<<<<<<< HEAD
<?php

abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();


    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }

    public function getMembros(){
        return $this->membros;
    }
}



class Mamifero extends Animal{
    public function locomover(){
        echo "Estou correndo";
    }

    public function alimentar(){
        echo "mamando";
    }

    public function emitirSom(){
        echo "Som de animal mamifero";
    }
}

class Gato extends Mamifero{
    public function emitirSom(){
        echo "Miau";
    }
}

//Aqui vemos um polimorfismo sendo aplicado (simples), mas intuitivo sobre para que serve e o que faz.

$gato = new Gato;
$gato->setPeso(20);
$gato->setIdade(2);
$gato->setMembros(4);
=======
<?php

abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();


    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }

    public function getMembros(){
        return $this->membros;
    }
}



class Mamifero extends Animal{
    public function locomover(){
        echo "Estou correndo";
    }

    public function alimentar(){
        echo "mamando";
    }

    public function emitirSom(){
        echo "Som de animal mamifero";
    }
}

class Gato extends Mamifero{
    public function emitirSom(){
        echo "Miau";
    }
}

//Aqui vemos um polimorfismo sendo aplicado (simples), mas intuitivo sobre para que serve e o que faz.

$gato = new Gato;
$gato->setPeso(20);
$gato->setIdade(2);
$gato->setMembros(4);
>>>>>>> acfd551e775ee186e067248d6676c6dfaf6167a8
$gato->emitirSom();