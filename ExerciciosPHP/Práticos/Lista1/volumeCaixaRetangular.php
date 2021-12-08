<?php
//Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da 
//seguinte fórmula: volume = comprimento x largura x altura
class VolumeCaixaRetangular{
    public $volume, $comprimento, $largura, $altura;
    public function __construct($comprimento, $largura, $altura){
        $this->comprimento = $comprimento;
        $this->largura = $largura;
        $this->altura = $altura;
        $this->volume = $this->comprimento * $this->largura * $this->altura;
    }
    public function getResult(){
        return $this->volume;
    }
}
$caixa = new VolumeCaixaRetangular(10, 5, 2);
echo "O volume da caixa é: " . $caixa->getResult();
?>