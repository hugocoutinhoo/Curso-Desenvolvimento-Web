<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>
<body>

    <?php
      /*Arrays*/
      $nomes = array('Hugo', 'Mirelly', 'Rosangela');

      $nomes[3] = 'Luiz';
      
      echo $nomes[0];
      echo $nomes[1];
      echo $nomes[2];
      echo $nomes[3];

      //$variaveis = ['Hugo', 'Luiz', 'Mirelly', 'Rosangela', 29, true, 10.09];

      //echo $variaveis[0];

      $informacao['nome'] = 'Hugo';
      $informacao['idade'] = 29;

      echo $informacao['nome'];
      echo $informacao['idade'];
    ?>

</body>
</html>