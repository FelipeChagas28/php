<?php 

    class Funcionario {
        public string $nome;
        public string $cargo;

        public function __construct($nome, $cargo)
        {
            $this->nome = $nome;
            $this->cargo = $cargo;
        }
    }

?>