<?php 

class Eletronicos {
    protected string $marca;

    public function __construct($marca)
    {
        $this->marca = $marca;
        echo "Eletrônico criado com sucesso! <br>";
    }


}


?>