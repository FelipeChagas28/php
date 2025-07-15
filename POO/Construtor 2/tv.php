<?php 

class Tv extends Eletronicos{
    private string $modelo;
    private int $polegadas;

    public function __construct($modelo, $polegadas, $marca)
    {
        $this->modelo = $modelo;
        $this->polegadas = $polegadas;
        //Chama o construtor da classe pai
        parent::__construct($marca);
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function getPolegadas(){
        return $this->polegadas;
    }

    public function setmModelo(){
        return $this->modelo;
    }
    public function setPolegadas(){
        return $this->polegadas;
    }

    public function apresentar(){
        echo "A Tv da marca $this->marca é do modelo $this->modelo e tem $this->polegadas polegadas!";
    }
}

?>