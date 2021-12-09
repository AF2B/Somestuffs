<?php

class Teste{
    const nome = "André";

    public function exibirNome(){
        echo self::nome;
    }
}

class Testando extends Teste{
    const nome = "Filipe";

    public function exibirNome(){
        echo parent::nome;
    }
}

$p1 = new Testando();
$p1->exibirNome();