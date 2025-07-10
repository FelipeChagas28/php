<?php 

    class Funcionario {
        protected string $nome;
        protected float $salario;

        public function __construct($nome, $salario)
        {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        protected function calcularBonus(){
            return $this->salario * 0.10;
        }

        public function apresentarFuncionario(){
            return "Nome: $this->nome recebera Salario; $this->salario";
        }
    }


?>