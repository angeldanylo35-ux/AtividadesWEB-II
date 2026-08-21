<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor_original = 250.00; 

        echo "O valor original do produto é: R$ " . $valor_original . "<br>";

        $desconto = $valor_original * 0.10;
        $valorFinal = $valor_original - $desconto;

        echo "O valor final do produtto com 10% de desconto é: R$ " . $valorFinal;
    ?>
</body>
</html>