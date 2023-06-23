<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php   
    
    $nome = 'Hugo';
    $idade = 29;

       if($nome === 'Hugo' && $idade >= 18) {
            echo 'O seu nome é Hugo e você é maior de idade';
       } else {
            echo 'O nome não é Hugo';
       } 
        

    ?> 
    
</body>
</html>