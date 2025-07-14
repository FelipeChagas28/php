<?php 

class Produto{
    private string $descricao;
    private float $preco;

    public function getDescricao(){
        return $this->descricao;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function setPreco(float $preco){
        $this->preco = $preco;
    }

    public function apresentarProduto(){
        echo "O produto {$this->descricao} custa R$ {$this->preco}";
    }
}


?>