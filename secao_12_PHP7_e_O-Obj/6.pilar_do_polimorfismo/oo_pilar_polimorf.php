<?php

    //modelo
    class Veiculo {

        //atributos
        public $placa = null;
        public $cor = null;
        

        //métodos
        function acelerar() {
            echo 'Acelerar';
        }

        function frear() {
            echo 'Frear';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão.';
        }

    }

    class Carro extends Veiculo {

        //atributos
        public $teto_solar = true;

        //métodos construct
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //métodos
        function abrirTetoSolar() {
            //afetar um atributo do objeto
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            //afetar um atributo do objeto
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {

        //atributos
        public $contra_peso_guidao = true;

        //métodos construct
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        
        //métodos
        function empinar() {
            //afetar um atributo do objeto
            echo 'Empinar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé.';
        }
    }

    class Caminhao extends Veiculo {}

    $carro = new Carro ('ABC1234', 'Branco');
    $moto = new Moto ('ADE1122', 'Preto');
    $caminhao = new Caminhao ();

    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo '<hr>';

    $carro->trocarMarcha();
    echo '<hr>';
    $moto->trocarMarcha();
    echo '<hr>';
    $caminhao->trocarMarcha();
/*
    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->acelerar();
    echo '<br>';
    $carro->frear();
    echo '<hr>';
    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $moto->frear();
*/
    
?>