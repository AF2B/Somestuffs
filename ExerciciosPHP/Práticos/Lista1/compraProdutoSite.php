<?php
//Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, 
//divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.
class CompraProdutoSite{
    public $valorP, $valorParcela, $valorTotal;
    public function __construct($valorP){
        $this->valorP = $valorP;
        $this->valorParcela = $this->valorP * 1.16 / 10;
        $this->valorTotal = $this->valorP * 1.16;
    }
    public function getValores(){
         return "Valor do produto: R$" . $this->valorP . "\nValor da parcela: R$" . $this->valorParcela . "\nValor total da compra: R$" . $this->valorTotal;
    }
}

$compra1 = new CompraProdutoSite(100);
echo $compra1->getValores();
?>