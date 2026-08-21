<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $cotacao_dolar = 5.25;
        $quantida_dolares = 100.00;
        $taxa_fixa = 10.00;

        $valor_Reais = $quantida_dolares * $cotacao_dolar;

        $total_final = $valor_Reais + $taxa_fixa;

        echo "Cotação do dia: R$ " . number_format($cotacao_dolar, 2) . "<br>";
        echo "Quantidade de dólares: US$ " . number_format($quantida_dolares, 2) . "<br>";
        echo "Valor convertido: R$ " . number_format($valor_Reais, 2) . "<br>";
        echo "Total final com taxa de R$ 10,00: R$ " . number_format($total_final, 2);
    ?>
</body>
</html>
