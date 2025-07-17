<?php 

class ContaBancaria {
    protected string $titular;
    protected string $numConta;
    protected string $agencia;
    protected float $saldo;

    public function __construct($titular, $numConta, $agencia, $saldo)
    {
        $this->titular = $titular;
        $this->numConta = $numConta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        if ($valor <= 0):
            throw new InvalidArgumentException("Valor insuficiente!"); // Exceção para valores inválidos 
        endif;

        $this->saldo += $valor; // Adiciona o valor ao saldo

        echo "Depósito de {$valor} realizado com sucesso! <br> Seu novo saldo é {$this->saldo}";
    }

    public function sacar($valor){
        if ($valor <= 0):
            throw new InvalidArgumentException("Valor insuficiente!");
        endif;

        if ($valor > $this->saldo):
            throw new InvalidArgumentException("Valor insuficiente!");
        endif;

        $this->saldo -= $valor;

        echo "Saque de {$valor} realizado com sucesso! <br> Seu novo saldo é {$this->saldo}";
    }

    public function consultarSaldo(){
        echo "Saldo atual é de: {$this->saldo}";
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
}


?>