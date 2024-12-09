<?php

//Exercício 1 - Lógica de Programação

$A =  readline('Digite o primeiro valor (A): ');
$B =  readline('Digite o segundo valor  (B): ');
$C =  readline('Digite o terceiro valor (C): ');

$soma = $A + $B; 

echo "A soma entre (A) e (B) é: ", $soma;

if($soma < $C){
    echo "\nA soma entre (A) e (B) é menor do que (C)";
}else{
    echo "\nA soma entre (A) e (B) é maior ou igual a (C)";
}