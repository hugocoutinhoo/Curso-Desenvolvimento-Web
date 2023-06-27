<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>

    <?php

    $num = 1;
    //op. comparação / lógicos
    echo '--Início do loop -- <br>';
    
    while($num < 10) {
        
        $num++;

        if($num == 2 || $num == 6) {
            continue;
        }

        echo "$num <br>";

        /*
        if($num > 100) {
            break;
        }
        */
    }
    echo '-- Fim do loop --';


    ?>

</body>
</html>