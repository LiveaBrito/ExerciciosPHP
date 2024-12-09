<?php

//Exercício 10 -- Condições de Pagamento - Lógica de Programação

//Lista de produtos e preços
$produtos = [
    1 => ["nome" => "Celular", "preco" => 1800.00],
    2 => ["nome" => "TV", "preco" => 3500.00],
    3 => ["nome" => "Notebook", "preco" => 3000.00],
    4 => ["nome" => "Air Fryer","preco" => 300.00],
    5 => ["nome" => "Fogão", "preco" => 900.00],
    6 => ["nome" => "Micro=Ondas", "preco" => 700.00],
];

echo "Lista de Produtos";
echo "\n************************\n";
echo "\n1- Celular - R$ 1800,00";
echo "\n2- TV - R$ 3500,00";
echo "\n3- Notebook - R$ 3000,00";
echo "\n4- Air Fryer - R$ 300,00";
echo "\n5- Fogão - R$ 900,00";
echo "\n6- Micro-Ondas - R$ 700,00";
echo "\n**********************************\n";

$produtoEscolhido = readline("\nDigite o numero do produto escolhido: ");

//Usando um 'array_key_exists' para puxar o nome do produto e o preço dele com base no numero escolhido
if(array_key_exists($produtoEscolhido, $produtos)) {
    $produto = $produtos[$produtoEscolhido] ["nome"];
    $precoProduto = $produtos[$produtoEscolhido] ["preco"];
}else {
    echo "Produto não encontrado.";
    exit; //Encerrar o script, caso o produto não seja encotrado.
}

echo "\n********************************************************************";

echo "\nFormas de pagamento:";
echo "\na - À vista (dinheiro ou pix) - desconto de 15%";
echo "\nb - À Vista (cartão de crédito) - desconto de 10%";
echo "\nc - Parcelado no cartão (2x) - Pagamento sem juros";
echo "\nd - Parcelado no cartão (3x ou mais) - Juros de 10% do produto";

$formaPagamento = readline("\nQual a forma de pagamento (a, b, c, d): ");

switch($formaPagamento){
    case 'a':
        echo "\n*****************************************************************************************\n";
        echo "\na - A vista (dinheiro ou pix)";
        $valorFinal = $precoProduto * (1 - 0.15);
        echo "\n $produto com o desconto de 15%: R$ ", number_format ($valorFinal, 2, ',', '.');
        break;
    case 'b':
        echo "\n*****************************************************************************************\n";
        echo "\nb - A Vista (cartão de crédito)";
        $valorFinal = $precoProduto * (1 - 0.10);
        echo "\n $produto com desconto no cartão de 10%: R$ ", number_format ($valorFinal, 2, ',', '.');;
        break;
    case 'c':
        echo "\n*****************************************************************************************\n";
        echo "\nc - Parcelado no cartão (2x)";
        $valorFinal = $precoProduto / 2;
        echo "\n $produto parcelado em 2x (sem juros): R$ ", number_format ($valorFinal, 2, ',', '.');;
        break;
    case 'd':
        $quantParcelas = readline("\n\nQuantas vezes será parcelado (3x ou mais: ");
        $quantParcelas = intval($quantParcelas); //garantindo que a quantidade parcelada seja um numero inteiro
        if ($quantParcelas < 3){
            echo "\nNúmero de parcelas inválido. Precisa ser 3 ou mais.";
        }else{
            $valorFinal = $precoProduto * (1/10);
            $valorParcela = $valorFinal / $quantParcelas;
            echo "\n*****************************************************************************************\n";
            echo "\nd - Parcelado no cartão (3x ou mais) - Juros de 10% do produto";
            echo "\n$produto parcelado em $quantParcelas vezes com o juros de 10%: R$ ", number_format ($valorFinal, 2, ',', '.');
        }
        break;
    default:
        echo "\nOpção inválida. Por favor digite a opção correta.";
}
echo "\n*********************************************************************\n";
echo "\nFinalizando programa...";
sleep(3);

echo "\n\nFim do Programa!!";








