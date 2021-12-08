<?php
//Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.
class calculoPorcentagem{
    public $valor, $resultado;
    public function __construct($valor){
        $this->valor = $valor;
        $this->resultado = $this->valor * 0.15;
    }
    public function getResultado(){
        return $this->resultado;
    }
}

$resultado = new calculoPorcentagem(100);
echo "O valor de 15% do valor 100 é: " . $resultado->getResultado();

echo "\n";

$resultado2 = new calculoPorcentagem(200);
echo "O valor de 15% do valor 200 é: " . $resultado2->getResultado();

?>