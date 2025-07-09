<?php 

    class Pessoa {
        public string $nome;

        public int $idade;

        //Construtor é um metodo espcial que é executado automaticamente quando a classe é chamada, serve para inicializar os atributos da classe
        public function __construct(string $n, int $i){
            //Valor recebido pelo construtor é atribuído aos atributos da classe
            $this->nome = $n;
            $this->idade = $i;
        }
        
        public function correr(){
            return $this->nome. " está correndo!";
        }

        public function apresentar(){
            return "Olá, me chamo {$this->nome} e tenho {$this->idade} anos";
        }
    }


    class Adicao {
        public float $num1;

        public float $num2;

        public float $soma;

        public function __construct(float $n1, float $n2){
            $this->num1 = $n1;
            $this->num2 = $n2;
        }
        
        public function somar(){
            $this->soma = $this->num1 + $this->num2;
            return $this->soma;
        }
    }
?>