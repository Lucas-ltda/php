<?php


class Titulo{
    private array $notas;
    public function __construct(
        public readonly  string $nome, 
        public readonly int $anoLancamento,
        public readonly Genero $genero)
    {
        $this -> notas = [];
    }

    function avaliar (float $nota) :void{
        $this->notas[ ] = $nota;        
    }

    public function media() :float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }
    public function duracaoEmMinutos(): int{
        return 0;
    }
}