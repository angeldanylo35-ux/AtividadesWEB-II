<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "POST">
        <label for = "idade">digite a sua idade</label>
        <input  type = "number" name = "idade" id = "idade">
        <br>
        <br>

        <button type = "submit"> calcular </button>
     
    </form>
  <?php
    $idade = $_POST ["idade"];
    $diasAno = 365;
    $idadeemDias = $idade * $diasAno ;
     print "sua idade em dias é: . $idadeemDias";
    ?>
</body>
</html>