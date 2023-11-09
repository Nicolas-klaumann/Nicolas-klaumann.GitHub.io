<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Soma</title>
</head>
<body>
    <?php
    // Valor à vista do carro
    $valor_a_vista = 22500.00;
    
    // Valor mensal da parcela
    $valor_mensal = 489.65;
    
    // Número de parcelas
    $num_parcelas = 60;
    
    // Cálculo do valor gasto com juros
    $valor_gasto_com_juros = ($valor_mensal * $num_parcelas) - $valor_a_vista;
    
    // Exibe o valor gasto apenas com juros
    echo "Mariazinha pagará R$ " . number_format($valor_gasto_com_juros, 2, ',', '.') . " em juros.";
    ?>

</body>
</html>
