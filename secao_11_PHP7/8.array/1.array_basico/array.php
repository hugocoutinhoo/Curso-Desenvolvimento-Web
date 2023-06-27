<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <?php
    //sequenciais (numéricos)

    //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
    //$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
    //$lista_frutas[] = 'Abacaxi';
    /*
    echo '<pre>';
    var_dump($lista_frutas);
    echo '<br> <hr>';
    print_r($lista_frutas);
    */
    //echo $lista_frutas[2];

    //associativos
    $lista_frutas = [
                    'a' => 'Banana', 
                    'b' => 'Maçã', 
                    'x' =>'Morango', 
                    'z' => 'Uva',
                    '2' => 'Abacate'];
    
    $lista_frutas['w'] = 'Abacaxi';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '<pre>';
    
    echo $lista_frutas['x'];
    ?>
    
</body>
</html>