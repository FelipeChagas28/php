<?php 

    class Veiculos {
        private string $modelo;
        private string $marca;
        private string $ano;

        public function __construct($modelo, $marca, $ano)
        {
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->ano = $ano;

        }

        public function exibirDetalhesCarros(){
            echo "O carro " . $this->modelo . " da marca " . $this->marca . " do ano " . $this->ano;
        }

        //Metdo GET e SET

        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getAno(){
            return $this->ano;
        }
        
        
        public function setMarca($marca){
            return $this->marca = $marca;
        }
        public function setModelo($modelo){
            return $this->modelo = $modelo;
        }
        public function setAno($ano){
            return $this->ano = $ano;
        }
    }


?>