<?php

class Filme {
    public string $nome; 
    // public me permite acessar os valores dos atributos
    public int $anoLancamento;
    public string $genero;
    public array $notas = [];

    function avaliar (float $nota) :void{
        $this->notas[ ] = $nota;        
    }

    function media() :float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }

} //criando um classe. Um classe nada mais é do que um template
  
