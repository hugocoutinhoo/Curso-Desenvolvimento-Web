<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters(return) e setters(void) - overloading/sobrecarga
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s) e seu nº de telefone é: $this->telefone. Exerce o cargo de $this->cargo e recebe uma remuneração no valor de $this->salario.";
        }

        //chamando métodos internamente
        function resumirCadFunc2() {
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s) e seu nº de telefone é: " . $this->__get('telefone') . ". Exerce o cargo de " . $this->__get('cargo') . " e recebe uma remuneração no valor de " .  $this->__get('salario') . ".";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
        //chamando métodos internamente
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('telefone', '81 98657-9093');
    $y->__set('numFilhos', 2);
    $y->__set('cargo', 'Programador');
    $y->__set('salario', 3000.00);
    //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) e seu nº de telefone é: ' . $y->__get('telefone') . '. Exerce o cargo de ' . $y->__get('cargo') . ' e recebe uma remuneração no valor de ' . $y->__get('salario');
    echo $y->resumirCadFunc();
    echo '<br>';
    echo $y->resumirCadFunc2();

    echo '<hr>';

    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('telefone', '81 99875-0806');
    $x->__set('numFilhos', 1);
    $x->__set('cargo', 'Secretária');
    $x->__set('salario', 1900.00);
    //echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) e seu nº de telefone é: ' . $x->__get('telefone') . '. Exerce o cargo de ' . $x->__get('cargo') . ' e recebe uma remuneração no valor de ' . $x->__get('salario');
    echo $x->resumirCadFunc();
    
    
?>