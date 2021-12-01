<?php

class Animal{

    public function Andar(){
        echo "Andando";
    }

    public function Correr(){
        echo "Correndo";
    }

    public function Comer(){
        echo "Comendo";
    }
}

class Cachorro extends Animal{

    public function Andar(){
        $this->Correr();
    }
}

$cachorro = new Cachorro();
echo $cachorro->Andar();