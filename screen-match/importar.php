<?php

$caminhoAqruivo = __DIR__ . '/filme.json';
$conteudo = file_get_contents($caminhoAqruivo);
$filme = json_decode($conteudo, true);

var_dump($filme);