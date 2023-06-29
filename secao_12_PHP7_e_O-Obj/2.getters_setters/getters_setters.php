<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters(return) e setters(void)
        function setNome($nome) {
            $this->nome = $nome;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }
        function getTelefone() {
            return $this->telefone;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s) e seu nº de telefone é: $this->telefone.";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->setNome('José');
    $y->setTelefone('81 98657-9093');
    $y->setNumFilhos(2);
    //echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) e seu nº de telefone é: ' . $y->getTelefone();
    echo $y->resumirCadFunc();
    echo '<hr>';

    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setTelefone('81 99875-0806');
    $x->setNumFilhos(1);
    //echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) e seu nº de telefone é: ' . $x->getTelefone();
    echo $x->resumirCadFunc();
    
    
?>