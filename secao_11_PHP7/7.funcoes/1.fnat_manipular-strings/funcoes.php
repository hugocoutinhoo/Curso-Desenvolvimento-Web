<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para manipular strings</title>
</head>
<body>
    
    <?php

    $texto1 = 'Um dia nublado e eu camuflado, tomei um remédio contra o meu tédio.';
    $texto2 = 'tudo minúsculo';

    echo strtolower($texto1); //todos os caracteres minúsculos
    echo '<br>';
    echo strtoupper($texto1); //todos os caracteres maiúsculos
    echo '<br>';
    echo ucfirst($texto2); //transforma o primeiro caracter em maiúsculo
    echo '<br>';
    echo strlen($texto1); //conta a quantidade de caracteres em uma string
    echo '<br>';
    echo str_replace('camuflado', 'calado', $texto1); //substitui uma cadeia de caracteres por outra dentro de uma string
    echo '<br>';
    echo substr($texto1, 0, 14); //retorna parte de uma string
    
    ?>

</body>
</html>