<?php
require __DIR__. "/src/Modelo/Filme.php";

echo "Bem Vindo ao Screen-Match\n";

$filme = new Filme();
$filme -> setAnoLancamento(2019);
// $filme -> nome = 'Parasita';
// $filme -> anoLancamento = 2019;
// $filme -> genero = 'Thriller';

$filme -> avaliar(10);
$filme -> avaliar(10);
$filme -> avaliar(5);
$filme -> avaliar(5);

var_dump($filme);

echo $filme ->media() . "\n";

echo "Lançamento:". $filme -> getAnoLancamento();