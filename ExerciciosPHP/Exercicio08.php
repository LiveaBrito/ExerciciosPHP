<?php

//Exercício 8 -- Calculo IMC -- Lógica de Programação

$peso = readline("Digite o seu peso (kg): ");
$altura = readline("Digite a sua altura (metros): ");

//Calculo do IMC
$imc = $peso / ($altura * $altura);

echo "\n******************************************";

echo "\nO seu IMC é: ", $imc;

//Apresenta o resultado do IMC com base no calculo feito
if ($imc < 18.5) {
    echo "\nAbaixo do Peso";
}else if($imc >= 18.6 && $imc <=24.9){
    echo "\nPeso ideal (parabens)";
}else if($imc >= 25.0 && $imc <= 29.9){
    echo "\nLevemente acima do peso";
}else if($imc >=30.0 && $imc <=34.9){
    echo "\nObesidade grau I";
}else if($imc >=35.0 && $imc <= 39.9){
    echo "\nObesidade grau II (severa)";
}else{
    echo "\nObesidade grau III (mórbida)";
}
