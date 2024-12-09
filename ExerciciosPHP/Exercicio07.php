<?php

//Exercício 7 -- Ordenação Decrescente -- Lógica de Programação

$valor1 = readline("\nDigite o primeiro numero: ");
$valor2 = readline("\nDigite o segundo numero: ");
$valor3 = readline("\nDigite o terceiro valor: ");

//Armazenando os valores digitados dentro de uma array
$valoresDesordenados = [$valor1 , $valor2, $valor3];

echo "\nValores desordenados: " , $valoresDesordenados;

//Ordenando os valores em ordem decrescente
rsort($valoresDesordenados);

echo "\nExibindo os valores em ordem decrescente: ";
foreach ($valoresDesordenados as $valor){
    echo "\nValores: ", $valor;
}




