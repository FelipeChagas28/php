<?php 

    class Carro{
        public string $modelo;

        public $motor;

        public function __construct($modelo, $potenciaMotor)
        {
            $this->modelo = $modelo;
            $this->motor = new Motor($potenciaMotor);
        }

        function exibirDetalhesCarro(){
            echo "Modelo do carro: " . $this->modelo . "<br>";
            $this->motor->apresentarPotencia();
        }
    }


?>