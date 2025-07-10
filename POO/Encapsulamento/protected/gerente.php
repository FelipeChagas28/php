<?php 

    // classe Gerente está herdando tudo da classe Funcionarios
    class Gerente extends Funcionario {
        public string $cargo;

        public function __construct($nome, $salario, $cargo)
        {
            // chama o construtor da classe pai (Funcionario) e passa os parâmetros necessários
            parent::__construct($nome, $salario);
            $this->cargo = $cargo;
        }

        public function gerarBonus(){
            $bonus = $this->calcularBonus();
            return "$this->nome recebera um salário de $this->salario";
        }
    }


?>