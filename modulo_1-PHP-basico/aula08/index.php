<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condições</title>
</head>
<body>
    
    <?php
        $variavel1 = 10 + 5;
        $variavel2 = '10 + 5';

        if($variavel1 == $variavel2){
            echo '<div style="width:300px;height:300px;background:red;"></div>';
        }else if ($variavel1 != $variavel2){
            echo 'A condição não bate';
        } else {
            echo 'falso';
        }
        
    ?>

</body>
</html>