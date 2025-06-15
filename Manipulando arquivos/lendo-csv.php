<?php
//Lendo arquivos CSV com php

function lerCsv($nomeArquivo)
{
    //criando um array vazio.
    $users = [];

    if (file_exists($nomeArquivo)): // file_exists verifica se o arquivo indicado existe.
        $abrirArquivo = fopen($nomeArquivo, 'r'); //fopen abre o arquivo indicado, e 'r' é o parâmetro para ler o arquivo.
        // Pegando oarquivo aberto, o 0 é para ele entender que não tem limite de caracteres, ',' elepega todas as linhas que contém nele separados por vírgula. 
        while (($linha = fgetcsv($abrirArquivo, 0, ',')) !== FALSE) { // Se a linha existe, ela será DIFERENTE de FALSE.
            $users[] = $linha; //Chamando o array que será preenchido pela condição.
        }

        fclose($abrirArquivo);

    else:
        echo "Arquivo não existe!";
    endif;

    return $users;
}

$nomeArquivo = "users.csv";

$dadosLidos = lerCsv($nomeArquivo);

//outra validação

if(count($dadosLidos) > 0): //Se os dados do array são maiores que zero
    echo "Dados encontrados...";
    foreach($dadosLidos as $dados){
        echo implode(' , ', $dados) . "\n"; //implode(',') serve para separar os dados por vírgula.
    }
else: 
    echo "Não entramos dados... \n";

endif;

