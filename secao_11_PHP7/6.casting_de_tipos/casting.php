<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipos</title>
</head>
<body>
    
    <?php


    //gettype() => retorna o tipo da variável
    $valor = false;
    //$valor2 = (float) $valor;
    //$valor2 = (string) $valor;
    //$valor2 = (int) $valor;
    $valor2 = (string) $valor;


    echo $valor. ' ' . gettype($valor);
    echo '<br>';
    echo $valor2. ' ' . gettype($valor2);

    ?>

</body>
</html>