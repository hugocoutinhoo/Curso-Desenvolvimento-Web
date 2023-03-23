<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var1 = 'valor1';
        $var2 = 'valor1';
        $var3 = 'valor3';

        if(($var1 == $var2) && ($var2 == $var3)){
            echo 'Operador lógico "E"';
        } else if (($var1 == $var2) || ($var2 == $var3)){
            echo 'Operador lógico "OU"';
        }
    ?> 
</body>
</html>