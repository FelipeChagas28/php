<?php

//Fazendo a data de inicio fica atualizada atomaticamente e fazendo ela voltar 7 dias na data de hoje
$inicio = date("m-d-Y", strtotime("-7 days"));

//pegando a data de hoje
$fim = date("m-d-Y");

//Chamando a api
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

//Trantando os dados usando javascript
$dados = json_decode(file_get_contents($url), true);

//Usando var_dump para ver o caminho do array
//var_dump($dados);

//Ver o array e posição para chegar na cotacaoCompra
$cotacao = $dados["value"][0]["cotacaoCompra"];

$valor = $_GET["valor"] ?? 0;

$convertido = $valor / $cotacao;

echo "A cotação do dolar atual é: " . $cotacao;
echo "<br>Na data: " . $fim . " Com R$" . $valor . " Você tem $" . $convertido;

?>

