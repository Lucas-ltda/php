<?php
//a ideia de colocar uma seria no screen match seria para entender o conceito de Herança


class Serie extends Titulo{
    public  function __construct (
        string $nome, 
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $epsPorTemporada,
        public readonly int $minutosPorEp
    ){
        parent :: __construct( $nome, $anoLancamento,$genero);

    }

    public function duracaoEmMinutos(): int{
        return $this->temporadas * $this->epsPorTemporada * $this->minutosPorEp;
    }

}