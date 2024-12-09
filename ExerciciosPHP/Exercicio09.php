<?php

//Exercício 9 - Media das Notas -- Lógica de Programaçãp

echo "********************************",PHP_EOL;
echo "Media das notas do aluno",PHP_EOL;
echo "********************************",PHP_EOL;

$nota1 = readline("\nDigite a primeira nota: ");
$nota2 = readline("\nDigite a segunda nota: ");
$nota3 = readline("\nDigite a terceira nota: ");

$notas = ($nota1 + $nota2 + $nota3) / 3;

echo "\nA média das notas do aluno é: ", $notas;

