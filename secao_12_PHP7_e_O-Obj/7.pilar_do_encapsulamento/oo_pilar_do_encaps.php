<?php

    //modelo
    class Pai {

        //atributos
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';
        

        //métodos de interface (getters e setters)
        /*
        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {

            if(strlen($value) >= 3){
                $this->nome = $value;
            }
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($value) {
            
            if(strlen($value) >= 3){
                $this->sobrenome = $value;
            }
        }
        */

        //métodos mágicos
        
        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        
        

        //métodos
        private function executarMania() {
            echo 'Assobiar';
        }

        protected function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);

            if($x >=1 && $x <= 8) {
                $this->responder();
            } else {
                $this->executarMania();
            }
            echo '<br>';
        }

    }

    $pai = new Pai ();
    //echo $pai->executarAcao();
    /*
    echo $pai->getNome();
    $pai->setNome('Jamilton');
    echo '<br>';
    echo $pai->getNome();
    echo '<hr>';
    echo $pai->getSobrenome();
    $pai->setSobrenome('Santos');
    echo '<br>';
    echo $pai->getSobrenome();
    */

    class Filho extends Pai {
        public function  __construct() {
            //exibir os métodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
        }
        
        private function executarMania() {
            echo 'Cantar';
        }

        protected function responder() {
            echo 'Olá';
        }

        public function x() {
            $this->executarMania();
        }

        
       
        
    }

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);

    $filho->executarAcao();
    echo '<br>';
    $filho->x();
    
    

    
    
   
  

    
?>