<?php
//Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%.

class Desconto{
    private $valor, $desconto, $total;
    public function __construct($valor, $desconto){
        $this->valor = $valor;
        $this->desconto = $desconto;
        $this->total = $this->valor - ($this->valor * ($this->desconto / 100));
    }
    public function getTotal(){
        return $this->total;
    }
}

$produto1 = new Desconto (100, 9);
echo "O valor do produto é R$ " . $produto1->getTotal() . "\n";

$produto2 = new Desconto (200, 9);
echo "O valor do produto é R$ " . $produto2->getTotal();
?>