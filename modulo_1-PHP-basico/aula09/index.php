<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
    
    <?php
        $nome = 29;
        $nome2 = 'João';

        //um sinal de igual retorna verdadeiro, pois atribui um valor:
        if($nome = $nome2){
            echo 'verdade';
        //apenas confere se o valor é igual
        } else if($nome == $nome2){
            echo 'valor igual';
        //conferimos para ver se é diferente
        } else if($nome != $nome2){
            echo 'valores diferentes';
        //verifica se são idênticos(mesmo valor e tipo)
        } else if($nome === $nome2){
            echo 'não são idênticos';
        //comparamos para ver se são diferentes(valor e tipo)
        } else if($nome !== $nome2) {
            echo 'valor e tipo diferentes';
        }
    ?>



</body>
</html>