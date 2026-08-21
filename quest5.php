<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $salario_atual = 2500.00;

        $aumento = $salario_atual * 0.055;
        $novo_salario = $salario_atual + $aumento;

        echo "Salário antigo: R$ " . number_format($salario_atual, 2) . "<br>";
        echo "O novo salário com reajuste de 5,5% é: R$ " . number_format($novo_salario, 2);
    ?>
</body>
</html>