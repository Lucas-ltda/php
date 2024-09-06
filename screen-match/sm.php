<?php
require __DIR__. "/src/funcoes.php";
echo "Bem vindo ao Screen Match!\n";

$nomeFilme = "Yuri";

$anoLancamento = 1990; // alocando um valor padrão caso o usuario não coloque

$quantidadeDeNotas = $argc - 1;
$notas = [];

$incluidoNoPlano = true;


for($index = 1 ; $index < $argc ; $index++){
    $notas[] = (float) $argv[$index];
};

$notaFilme = array_sum($notas) / $quantidadeDeNotas; // array_sum() é um funação 

$planoPrime = true ; 

$incluidoNoPlano =  incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " .$nomeFilme ."\n";  
// Ponto ( . ) é usando em php para CONCATENAÇÃO

echo "Nota do Filme: $notaFilme \n";
 
// em php apas duplas " " é usado para interpretar e aspas simples' ' para mostrar como string sem interpretar

echo "Ano de lançamento: " .$anoLancamento ."\n";

exibeMensagemLancamento($anoLancamento);


$generoDoFilme = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação" ,
    "Vingadores - Ultimatito" => "Heroi",
    "Quem vai ficar com Mary" => "Comedia",
    "A Bruxa De Blair" => "Terror",
    default => "Genero não conhecido",
};

echo "Genero do filme: " .$generoDoFilme ."\n";
// echo $argc;

$filme = criarFilme(
    nota : 10,
    genero : "heroi",
    anoLancamento :  2019,
    nome : "Teste",
);// com a utilização de parametros nomeados, não importa a ordem 

echo $filme["ano"]. "\n";

var_dump($notas);
sort($notas);
var_dump($notas);
echo min($notas);
echo "\n";
$posicaoDoisPontos = strpos($filme['nome'],':');

var_dump(substr($filme['nome'], 0 ,$posicaoDoisPontos));

var_dump(json_encode($filme)); //"convertor" de um obj em php para json
var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"Heroi"}')); // covertor de json para algum tipo varivel em php

$filmeStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json',$filmeStringJson);
//para exportar um filme em formato json

echo "\n";

var_dump($filme);