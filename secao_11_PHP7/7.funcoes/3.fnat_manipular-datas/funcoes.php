<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para manipular datas</title>
</head>
<body>
    
    <?php


    /*
    echo date('d/M/Y, H:i'); //recuperar a data atual
    echo '<br>';
    echo date_default_timezone_get(); //recuperar a timezone default da aplicação
    echo '<br>';
    date_default_timezone_set('America/Sao_Paulo'); //atualizar a timezone default da aplicação
    echo '<br>';
    echo date('d/M/Y, H:i');
    */

    $data_inicial = '2023-06-26';
    $data_final = '2023-09-03';

    //timestamp
    //1º de Janeiro de 1970 - 1970/01/01
    
    $time_inicial = strtotime($data_inicial);
    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br>';
    $time_final = strtotime($data_final);
    echo $data_final . ' - ' . $time_final;
    $diferenca_times = $time_final - $time_inicial;
    echo '<br>';
    echo $diferenca_times;
    echo '<br>';
    $segundos_por_dia = 24 * 60 * 60;
    echo 'Um dia possui ' . $segundos_por_dia . ' segundos.';
    echo '<br>';
    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_por_dia;
    echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas . '';

    
    ?>

</body>
</html>