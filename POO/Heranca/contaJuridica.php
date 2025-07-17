<?php 

class ContaJuridica extends ContaBancaria{
    private string $cnpj;

    public function __construct($doc, $titular, $numConta, $agencia, $saldo)
    {
        $this->cnpj = $doc;
        parent::__construct($titular, $numConta, $agencia, $saldo);
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($doc)
    {
        $this->cnpj = $doc;

        return $this;
    }
}


?>