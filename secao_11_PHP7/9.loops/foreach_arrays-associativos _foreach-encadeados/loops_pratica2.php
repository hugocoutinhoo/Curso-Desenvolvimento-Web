<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percorrendo arrays com while, do while, e for</title>
</head>
<body>


    <?php

    $funcionarios = array('João', 'Maria', 'Júlia');

    echo '<pre>';
    print_r($funcionarios);
    echo '<pre>';

    foreach($funcionarios as $idx $nome_funcionario) {
        echo $nome_funcionario . '<br>';
    }

    ?>


</body>
</html>