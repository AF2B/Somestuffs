<?php
//Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%.
class Desconto{
    public $valor, $desconto;
    public function __construct($valor){
        $this->valor = $valor;
        $this->desconto = $this->valor * 0.27;
    }
    public function getResult(){
        return $this->desconto;
    }
}
$valor = new Desconto(100);
echo $valor->getResult();
?>