<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {


    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    //tratando exceptions

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        /*
        $query = '
            create table tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';
        
        $retorno = $conexao->exec($query);
        //0
        echo $retorno;
        */

        /*
        $query = '
                insert into tb_usuarios(
                    nome, email, senha
                ) values (
                    "Jorge Sant Ana", "jorge@teste.com.br", "123456"
                )
        ';
        */
        /*
        $query = '
                delete from tb_usuarios
        ';

        $retorno = $conexao->exec($query);
        echo ($retorno);
        */
        /*
        $query = '
                insert into tb_usuarios(
                    nome, email, senha
                ) values (
                    "Jorge Sant Ana", "jorge@teste.com.br", "123456"
                )
        ';

        $conexao->exec($query);

        $query = '
                insert into tb_usuarios(
                    nome, email, senha
                ) values (
                    "Jamilton Damasceno", "jamilton@teste.com.br", "456789"
                )
        ';

        $conexao->exec($query);

        $query = '
                insert into tb_usuarios(
                    nome, email, senha
                ) values (
                    "Maria Silva", "maria@teste.com.br", "123456"
                )
        ';

        $conexao->exec($query);
        */

        //----------------Selecionando vários registros -------------------
        /*
        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_BOTH);
        //se o retorno for por OBJ, deve alterar a forma de acessar os valores 

        echo '<pre>';
        print_r($lista);

        echo $lista[2]['email'];
        */

        //----------------Selecionando apenas um registro ------------------
        /*
        $query = '
            select * from tb_usuarios order by nome desc limit 1
        ';

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
        //se o retorno for por OBJ, deve alterar a forma de acessar os valores 

        echo '<pre>';
        print_r($usuario);

        echo $usuario->nome;
        */

        /*
        $query = '
            select * from tb_usuarios 
        ';
        //------------- Utilizando o FOREACH para listar registros
        //$stmt = $conexao->query($query);

        foreach($conexao->query($query) as $key => $value) {
            print_r($value);
            echo '<hr>';
        }
        */
        //$lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //se o retorno for por OBJ, deve alterar a forma de acessar os valores 

        //echo '<pre>';
        //print_r($lista_usuarios);

        /*
        foreach($lista_usuarios as $key => $value) {
            echo $value['nome'];
            echo '<hr>';
        }
        */

        $query = "select * from tb_usuarios where ";
        $query .= " email = :usuario ";
        $query .= " AND senha = :senha ";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue('usuario', $_POST['usuario']);
        $stmt->bindValue('senha', $_POST['senha'], PDO::PARAM_INT);

        $stmt->execute();

        $usuario = $stmt->fetch();

        echo '<hr>';
        echo '<pre>';
        print_r($usuario);
        

        

    } catch(PDOException $e) {
        echo 'Erro: ' .$e->getCode().' Mensagem: ' .$e->getMessage();
        //registrar erro
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="usuario" id="" placeholder="usuário">
        <br><br>
        <input type="password" name="senha" id="" placeholder="senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>