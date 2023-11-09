<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>

<p>
Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois utiliza Juros Simples para o cálculo das parcelas. Sabendo então que o valor a vista do moto é R$ 8.654,00. Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para:
24 vezes
36 vezes
48 vezes
60 vezes
</p>
<?php
    // Valor à vista da moto
    $valor_a_vista = 8654.00;

    // Taxa de juros inicial (1,5%)
    $taxa_juros = 1.5;

    // Opções de parcelamento
    $parcelas = [24, 36, 48, 60];

    foreach ($parcelas as $num_parcelas) {
        // Calcula a taxa de juros em decimal
        $taxa_juros_decimal = $taxa_juros / 100;

        // Cálculo do valor das parcelas com juros simples
        $valor_parcela = $valor_a_vista * (1 + $taxa_juros_decimal * $num_parcelas) / $num_parcelas;

        echo "Para $num_parcelas vezes, o valor da parcela é R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";

        // Aumenta a taxa de juros em 0,5% para a próxima iteração
        $taxa_juros += 0.5;
    }
    ?>
</body>
</html>
