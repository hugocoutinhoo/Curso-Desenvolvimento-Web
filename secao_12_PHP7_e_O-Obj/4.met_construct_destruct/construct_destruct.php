<?php

    //modelo
    class Pessoa {

        //atributos
        public $nome = null;

        //métodos
        //construct e destruct
        function __construct($nome) {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'Objeto removido';
        }


        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo';
        }
        
    }

    $pessoa = new Pessoa('Jorge');
    echo '<br>';
    echo 'Nome: ' . $pessoa->__get('nome');
    echo '<br>';
    echo $pessoa->correr();

    echo '<br>';
    //unset($pessoa); //proposital

   
    
    
?>