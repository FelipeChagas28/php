<?php 

    class Carros {
        public string $modelo;
        public string $marca;
        public string $ano;

        public function __construct($modelo, $marca, $ano)
        {
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->ano = $ano;

        }

        public function exibirDetalhesCarros(){
            echo "O carro " . $this->modelo . " da marca " . $this->marca . " do ano " . $this->ano;
        }
    }


?>