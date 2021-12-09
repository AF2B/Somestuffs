<?php
//Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
class somaPeloPrimeiroNumero{
    public $val1, $val2, $resultado;
    public function __construct($val1, $val2){
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->resultado = ($this->val1 + $this->val2) * $this->val1;
    }
    public function getResultado(){
        return $this->resultado;
    }
}
$soma = new somaPeloPrimeiroNumero(10, 20);
echo $soma->getResultado();
?>