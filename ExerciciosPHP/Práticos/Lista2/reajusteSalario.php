<?php
/*Realize um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário 
de acordo com a seguinte regra: • salários até 300, reajuste de 50% • salários maiores que 300, 
reajuste de 30% LAÇOS DE REPETIÇÃO – Utilizando for() – while() e Funções de String*/

$salarios = [500, 800, 350, 100, 80, 1100];

foreach ($salarios as $salario) {
    if ($salario <= 300) {
        $salario = $salario * 1.5;
    } else {
        $salario = $salario * 1.3;
    }
    echo "Salário: R$ " . number_format($salario, 2, ',', '.') . "\n";
}

echo "\n";


    for ($i = 0; $i < count($salarios); $i++) {
        if ($salarios[$i] <= 300) {
            $salarios[$i] = $salarios[$i] * 1.5;
        } else {
            $salarios[$i] = $salarios[$i] * 1.3;
        }
        echo "Salário: R$ " . number_format($salarios[$i], 2, ',', '.') . "\n";
    }
?>
    