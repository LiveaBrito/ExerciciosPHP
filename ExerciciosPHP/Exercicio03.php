<?php

//Exercício 3 -- Lógica de Programação

//nesse exercício, quando os valores de a e b são iguais, vai ser feito a soma entre eles. ex: a=5 & b=5
//se não (caso sejam diferentes os valores de a e b) será feito a multiplicação. ex: a=4 & b=9

$A =  readline('Digite o primeiro valor (A): ');
$B =  readline('Digite o segundo valor  (B): ');

if($A === $B){
    $C = $A + $B;
    echo "A soma de (A) e (B) é: ", $C;
}else{
    $C = $A * $B;
    echo "S multiplicação de (A) e(B) é: ", $C;
}

