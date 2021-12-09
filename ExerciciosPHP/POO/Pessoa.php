<?php

class Pessoa{
    public $nome, $idade;

    public function Falar(){
        return "O meu nome é ".$this->nome." e tenho ".$this->idade." anos.";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "André";
$pessoa1->idade = "23";
echo $pessoa1->Falar();