<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action = "" method = "POST">
        <label for = "nota1">informe a primeira nota</label>
        <input  type = "number" name = "nota1" id = "nota1" >
        <br>
        <br>
        <label for = "nota2">informe a segunda nota</label>
        <input  type = "number" name = "nota2" id = "nota2">
        <br>
        <br>
        <label for = "nota3">informe a terceira nota</label>
        <input  type = "number" name = "nota3" id = "nota3">
        <br>
        <br>
        <label for = "situacao">Situacao: </label>
        <label id ="situacao">
             

        <button type = "submit"> calcular </button>
     
    </form>
        <?php
            $nota1 = $_POST ["nota1"];
            $nota2 = $_POST ["nota2"];
            $nota3 = $_POST ["nota3"];
            $mediaNota = ($nota1 + $nota2 + $nota3) / 3;
            $situacao = $mediaNota >= 7 ? "aprovado" : "reprovado";
            print "A sua nota media das tres notas:  $mediaNota, voce esta $situacao";

           


        ?>

     
</body>
</html>