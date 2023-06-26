<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para manipular números</title>
</head>
<body>
    
    <?php

    $numero = 15.67;
    $numero2 = 64;

    echo ceil($numero); //arredonda o valor para cima
    echo '<br>';
    echo floor($numero); //arredonda o valor para baixo
    echo '<br>';
    echo round($numero); //arredonda o valor com base nas casas decimais
    echo '<br>';
    echo rand(); //gera um número inteiro aleatório
    echo '<br>';
    echo getrandmax(); //valor aleatório máximo do sistema operacional
    echo '<br>';
    echo sqrt($numero2); //retorna a raiz quadrada do número
    echo '<br>';
    
    
    ?>

</body>
</html>