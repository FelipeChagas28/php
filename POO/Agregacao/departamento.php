<?php 

    class Departamento {
        public string $nomeDepartamento;

        public $funcionarios = [];

        public function __construct($nomeDepartamento)
        {
            $this->nomeDepartamento = $nomeDepartamento;
        }

        public function adicionarFuncionarios(Funcionario $funcionarios){
            $this->funcionarios[] = $funcionarios;
        }

        public function listarFuncionarios(){
            echo "Funcionarios do departamento " . $this->nomeDepartamento . "<br>";
            foreach($this->funcionarios as $funcionario){
                echo $funcionario->nome . " Cargo: {$funcionario->cargo}" . "<br>";
            }
        }
    }

?>