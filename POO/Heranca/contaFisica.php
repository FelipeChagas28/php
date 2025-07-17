<?php 

class ContaFisica extends ContaBancaria{
    private string $cpf;

    public function __construct($cpf, $titular, $numConta, $agencia, $saldo)
    {
        $this->cpf = $cpf;
        parent::__construct($titular, $numConta, $agencia, $saldo);
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
}


?>