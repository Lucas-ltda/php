<?php

class Filme {
    // private string $nome; 
    // public me permite acessar os valores dos atributos
    // private int $anoLancamento;
    // por exemplo, com o ano de lançamento como privado, é preciso criar um metodo (uma função) publico. Mas como atrelar um valor a propriedade privada? Com setters e getters é possivel tanto definir (set...) como resgatar(get...)
    // public string $genero;
    private array $notas;
    // com as propriedades sendo privadas,eu não consigo alterar fora da classe filme

    public function __construct(
        public readonly  string $nome, 
        // readonly nada mais do que indica que propriedade em questão é somente para leitura, fazendo com ela possa ser acessada sem depender de um metodo get
        public readonly int $anoLancamento,
        public readonly Genero $genero 
        // ao definir um modificador de acesso(private/public) a um parametro no construtor, esse parametro é "promovido" a uma propriedade, funciona SOMENTE COM O METODO CONSTRUTOR
        )
    {
        $this -> notas = [];
    }
    // o metodo construct nada mais é do que um metodo que é chamado de forma automatica sempre que um objeto é instanciado. Não pode definir um tipo de returno já que o retorno dele é o objeto em si
    // com o metodo construct não se faz necessario o uso do metodo set.

    function avaliar (float $nota) :void{
        $this->notas[ ] = $nota;        
    }

    public function media() :float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }

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
  
