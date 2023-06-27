<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <?php
    //in_array() -> true ou false para a existência do que está sendo procurado. true = 1 / false = vazio
    
    
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
    
    echo '<pre>';
    print_r($lista_frutas);
    echo '<pre>';

    $existe = in_array('Abacate', $lista_frutas);
    if($existe) {
        echo 'Sim, o valor pesquisado existe no array';
    } else {
        echo 'O valor pesquisado não existe no array';
    }
    
    
    //array_search() -> retorna o índice do valor pesquisado, caso ele exista. true = indice / null
    echo '<br>';
    echo array_search('Uva', $lista_frutas);

    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
    ];
    
    echo '<pre>';
    print_r($lista_coisas);
    echo '<pre>';





    ?>
    
</body>
</html>