<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $quantidade_ideal = 100; 
    $quantidade_atual = 75; 

    $diferenca = $quantidade_ideal - $quantidade_atual;

    echo "A diferença para atingir o estoque ideal é de: " . $diferenca . " unidades.";
    ?>
</body>
</html>