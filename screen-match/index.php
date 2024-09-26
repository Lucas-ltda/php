<?php
require __DIR__. "/src/Modelo/Genero.php";
require __DIR__. "/src/Modelo/Titulo.php";
require __DIR__. "/src/Modelo/Serie.php";
require __DIR__. "/src/Modelo/Filme.php";

echo "Bem Vindo ao Screen-Match\n";

$filme = new Filme(
    'Parasita',
    2021,
    Genero:: SuperHeroi,
    132,
);

$filme -> avaliar(10);
$filme -> avaliar(10);
$filme -> avaliar(5);
$filme -> avaliar(5);

var_dump($filme);

echo $filme ->media() . "\n";


echo "Nome do filme: ". $filme ->nome ."\n";
echo "Lançamento: ". $filme -> anoLancamento.  "\n";

echo"======================= \n";
$serie = new Serie(
    'Game Of Thrones',
    2011,
    Genero :: Drama,
    8,
    9,
    60
);

$serie -> avaliar(10);

echo "Nome da serie: ". $serie ->nome.  "\n";
echo "Temporadas: ". $serie -> temporadas.  "\n";

echo"Nota:". $serie->media().  "\n";