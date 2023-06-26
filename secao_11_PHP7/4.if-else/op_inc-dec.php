<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento e decremento</title>
</head>
<body>
    
    <h3>Pós-incremento</h3>
    <?php
        $a = 7;

        echo "O valor contido em a é: $a <br>";
        echo 'O valor contido em a após o incremento é: ' . $a++ . ' <br>';
        echo 'O valor contido em a após o decremento é: ' . $a-- . ' <br>';
        //echo 'O valor contido em a antes do incremento é: ' . ++$a . ' <br>';
        echo "O valor atualizado de a é: $a <br>";



    ?>  

</body>
</html>