<?php 

class Pedido{
    public int $numeroPedido;

    public float $valor;

    // Associação entre Pedido e Cliente
    public Cliente $cliente;

    public function __construct($numeroPedido, $valor, Cliente $cliente)
    {
        $this->numeroPedido = $numeroPedido;
        $this->valor = $valor;
        $this->cliente = $cliente;
    }

    public function apresentarPedido(){
        echo "Numero do pedido: " . $this->numeroPedido . "<br>";
        echo "Valor do pedido: " . $this->valor . "<br>";
        echo "Cliente: " . $this->cliente->nome . "<br>";
        echo "Email do cliente: " . $this->cliente->email . "<br>";
    }
}

?>