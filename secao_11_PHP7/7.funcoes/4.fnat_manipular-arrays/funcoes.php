<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular arrays</title>
</head>
<body>
    
    <?php
    /*
    ------is_array() //Verifica se o parâmetro é um array
    $array = array('notebook', 'teclado');
    $retorno = is_array($array);

    if($retorno) {
        echo 'sim, é um array';
    } else {
        echo 'não, não é um array';
    }
    */
    
    //----array_keys() //retorna todas as chaves de um array
    /*
    $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
    print_r($array);
    echo '<pre>';
    $chaves_array = array_keys($array);
    echo '<pre>';
    print_r($chaves_array);
    echo '<pre>';
    */

    //-----sort() //ordena um array e reajusta seus índices
    /*
    $array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
    echo '<pre>';
    print_r($array);
    echo '<pre>';

    sort($array); //true ou false
    echo '<pre>';
    print_r($array);
    echo '<pre>';
    */

    //-----asort() //ordena um array preservando os índices
    /*
    $array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
    echo '<pre>';
    print_r($array);
    echo '<pre>';

    asort($array); //true ou false
    echo '<pre>';
    print_r($array);
    echo '<pre>';
    */

    //------count() //conta a quantidade de elementos de um array
    /*
    $array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
    echo '<pre>';
    print_r($array);
    echo count($array);
    echo '<pre>';
    */

    //-------array_merge() //funde um ou mais arrays
    /*
    $array1 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
    $array2 = ['monitor', 'caixa de som', 'cadeira gamer', 'processador'];
    echo '<pre>';
    print_r($array1);
    print_r($array2);
    $novo_array = array_merge($array1, $array2);
    echo '<pre>';
    print_r($novo_array);
    */

    //explode() //divide uma string baseada em um delimitador
    /*
    $string = '26/06/2023';
    $array_retorno = explode('/', $string);
    echo '<pre>';
    print_r($array_retorno);
    echo '<pre>';
    */

    //implode() //junta elementos de um array em uma string
    $array = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
    $string_retorno = implode('-', $array);
    echo '<pre>';
    print_r($string_retorno);
    echo '<pre>';
    
    

    
    
    ?>

</body>
</html>