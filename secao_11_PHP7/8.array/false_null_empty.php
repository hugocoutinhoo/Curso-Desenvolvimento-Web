<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, null, empty</title>
</head>
<body>
    <?php
    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    //------------valores null
    if(is_null($funcionario1)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }

    echo '<br>';
    if(is_null($funcionario2)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }

    echo '<br>';
    if(is_null($funcionario3)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }

    echo '<br> <hr>';

    //------------valores vazios
    if(empty($funcionario1)) {
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não está vazia';
    }

    echo '<br>';
    if(empty($funcionario2)) {
        echo 'Sim, a variável está vazia';
    } else {
        echo 'Não, a variável não está vazia';
    }

    echo '<br>';
    if(is_null($funcionario3)) {
        echo 'Sim, a variável é null';
    } else {
        echo 'Não, a variável não é null';
    }
    ?>
</body>
</html>