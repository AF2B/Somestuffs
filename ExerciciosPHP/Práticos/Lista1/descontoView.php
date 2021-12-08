<?php
//Escreva um algoritmo que receba o valor de um produto e calcule um desconto 
//de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.

$valorP = 100;
$desconto = 0.07;

function desconto($valorP, $desconto){
    $valorP = $valorP - ($valorP * $desconto);
    return $valorP;
}

echo 
      "Valor do Produto: ${valorP} \n"
    . "Valor do Desconto: ${desconto} \n" 
    . "Valor do Produto com o desconto: " .desconto(100, $desconto);
?>