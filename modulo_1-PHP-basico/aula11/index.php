<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loopings</title>
</head>
<body>

    <?php
        //laço de repetição "FOR"
        for($contador=0;$contador<10;$contador++){
            echo 'olá mundo!';
            echo '<br />';
            echo $contador;
            echo '<hr>';
        }

        //laço de repetição "WHILE"
        $contador = 0;
        while($contador<10){
            echo 'Olá mundo!';
            echo '<hr>';
            $contador++;
        }

        //laço de repetição "DO WHILE"
        $contador = 0;
        do{
            echo 'Olá mundo';
            echo '<br />';
            $contador++;
            echo '<hr>';
        }while($contador < 10);
    ?>

</body>
</html>