<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero_sorteado = rand(1, 100); 

        $resto = $numero_sorteado % 2;

        if ($resto == 0) {
            echo "O número sorteado foi " . $numero_sorteado . " e ele é PAR.";
        } else {
            echo "O número sorteado foi " . $numero_sorteado . " e ele é ÍMPAR.";
}
    ?>
</body>
</html>