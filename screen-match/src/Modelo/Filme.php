<?php

class Filme extends Titulo {
    
    public function __construct(
        string $nome, 
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos
        )
    {
        // $this -> notas = [];
        parent:: __construct($nome,$anoLancamento,$genero);
    }

    public function duracaoEmMinutos(): int{
        return $this->duracaoEmMinutos;
    }

    // o metodo construct nada mais é do que um metodo que é chamado de forma automatica sempre que um objeto é instanciado. Não pode definir um tipo de returno já que o retorno dele é o objeto em si
    // com o metodo construct não se faz necessario o uso do metodo set.

    // function avaliar (float $nota) :void{
    //     $this->notas[ ] = $nota;        
    // }

    // public function media() :float {
    //     $somaNotas = array_sum($this->notas);
    //     $quantidadeDeNotas = count($this->notas);

    //     return $somaNotas / $quantidadeDeNotas;
    // }

    // public function setAnoLancamento(int $anoLancamento):void
    // {
    //     $this -> anoLancamento = $anoLancamento;
    // }
    // Nesse caso, set não tem retorno por estar definindo o valor da propriedade ano lançamento

    // public function getAnoLancamento():int{
    //     return $this -> anoLancamento;
    // }
    // // Enquanto o get tem retorno por estar buscando o valor da propriedade ano lançamento 
    // public function getNome() :string {
    //     return $this -> nome;
    // }

    // public function getGenero() :string {
    //     return $this -> genero;
    // }
} //criando um classe. Um classe nada mais é do que um template
  
