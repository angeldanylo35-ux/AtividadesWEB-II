<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $valor_total = 150.00; 

    $valor_cada = $valor_total / 3;

    echo "O valor total da conta é: R$ " . number_format($valor_total, 2) . "<br>";
    echo "Cada um dos 3 amigos deve pagar: R$ " . number_format($valor_cada, 2);
    ?>
</body>
</html>