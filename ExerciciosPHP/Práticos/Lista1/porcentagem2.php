<?php
//Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.
class Porcentagem{
    public $valor, $porcentagem5, $porcentagem50;
    public function __construct($valor){
        $this->valor = $valor;
        $this->porcentagem5 = $valor * 0.05;
        $this->porcentagem50 = $valor * 0.50;
    }
    public function getPorcentagem1(){
        return $this->porcentagem5;
    }
    public function getPorcentagem50(){
        return $this->porcentagem50;
    }
}
$valor = new Porcentagem(100);
echo "5% do valor(100): ".$valor->getPorcentagem1() . "\n50% do valor(100): ".$valor->getPorcentagem50();
?>