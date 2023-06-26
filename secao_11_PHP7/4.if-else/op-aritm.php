<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    
    <?php
       
       $num1 = 13;
       $num2 = 4;
       $soma = $num1 + $num2;
       $subtracao = $num1 - $num2;
       $multiplicacao = $num1 * $num2;
       $divisao = $num1 / $num2;
       $modulo = $num1 % $num2;
       

       echo "A soma entre $num1 e $num2 é: " . ($soma);
       echo '<br>';
       echo "A subtração entre $num1 e $num2 é: " . ($subtracao);
       echo '<br>';
       echo "A multiplicação entre $num1 e $num2 é: " . ($multiplicacao);
       echo '<br>';
       echo "A divisão entre $num1 e $num2 é: " . ($divisao);
       echo '<br>';
       echo "O resto da divisão entre $num1 e $num2 é: " . ($modulo);

       //Atribuição de valores

        $x = 10;
        echo '<br>';
        echo $x += $x;


    ?>

</body>
</html>