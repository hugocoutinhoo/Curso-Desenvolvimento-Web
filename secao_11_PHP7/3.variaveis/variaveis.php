<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
        //string
        $nome = 'Hugo';
        //number int
        $idade = 29;
        // number float
        $peso = 98.5;
        // boolean
        $fumante_sn = false; //true = 1 / false = (vazio)

        //.... lógica ....//
        //$idade = '30';

        echo 'Olá ' . $nome . '! <br> Você tem ' . $idade . ' anos de idade e pesa ' . $peso . 'kgs.';

        //aspas duplas
        echo '<br>';

        echo "Olá $nome. Você tem $idade anos de idade e pesa $peso kgs."
        
    
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
    
    
</body>
</html>