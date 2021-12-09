<?php
//Efetue um algoritmo PHP que receba a altura e o sexo de uma pessoa, 
//calcule e imprima o seu peso ideal, utilizando as seguintes 
//fórmulas: • para homens: (72.7 * H) – 58 • para mulheres: (62.1 * H) – 44.7

function pesoIdeal(){
    $sexo = readLine("Digite o seu sexo: ");
    $altura = readLine("Digite a sua altura: ");
    if($sexo == "Masculino"){
        $pesoIdeal = (72.7 * $altura) - 58;    
    }else{
        $pesoIdeal = (62.1 * $altura) - 44.7;
    }
    return "O Seu peso ideal é de: " . floor($pesoIdeal) . "Kg\n";
}

echo pesoIdeal();