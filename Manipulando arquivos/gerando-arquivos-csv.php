<?php
//Criando arquivos CSV

function gerarArquivosCsv($nomeArquivo, $users)
{
    //Verificando se os dados existem
    if (count($users) > 0): //Contagem dos dados do array, se for MAIOR que zero
        //Usando a função "fopen", para abrir o arquivo que está especificado na variável $nomeArquivo e dando o parâmetro 'w' para escrever no arquivo.
        $escreverCsv = fopen($nomeArquivo, 'w');
        foreach ($users as $dados) {
            fputcsv($escreverCsv, $dados); //A função fputcsv precisa de dois parâmetros, 1º o arquivo aberto, 2º são os dados contidos no array.
        }
        fclose($escreverCsv);

    else:
        echo "Não existe dados";

    endif;
}

//Array que será usado
$users = [
    ["Nome", "Idade", "E-mail"],
    ["Teste", 23, "Teste@gmail.com"],
    ["Maria", 22, "Maria@gmail.com"],
    ["Paulo", 33, "Paulo@gmail.com"],
    ["Thiago", 51, "Thiago@gmail.com"],
    ["Carlos", 56, "Carlos@gmail.com"],
    ["Sandro", 29, "Sandro@gmail.com"],
];

$nomeArquivo = "teste.csv"; //Indicando o arquivo que deve ser criado

gerarArquivosCsv($nomeArquivo, $users); // chamando a função