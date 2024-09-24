<?php
require __DIR__. "/src/Modelo/Genero.php";
require __DIR__. "/src/Modelo/Filme.php";

echo "Bem Vindo ao Screen-Match\n";

$filme = new Filme(
    'Parasita',
    2021,
    Genero:: SuperHeroi
);

// $filme -> nome = 'Parasita';
// $filme -> anoLancamento = 2019;
// $filme -> genero = 'Thriller';

$filme -> avaliar(10);
$filme -> avaliar(10);
$filme -> avaliar(5);
$filme -> avaliar(5);

var_dump($filme);

echo $filme ->media() . "\n";


echo "Nome do filme: ". $filme ->nome ."\n";
echo "Lançamento: ". $filme -> anoLancamento;

// echo "Nome do filme: ". $filme -> getNome() ."\n";
// echo "Lançamento:". $filme -> getAnoLancamento();
// Mesmo com as propriedades privadas, consigo acessar o valor via metodos publicos (get)