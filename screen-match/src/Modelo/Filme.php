<?php

class Filme {
    private string $nome; 
    // public me permite acessar os valores dos atributos
    private int $anoLancamento;
    // por exemplo, com o ano de lançamento como privado, é preciso criar um metodo (uma função) publico. Mas como atrelar um valor a propriedade privada? Com setters e getters é possivel tanto definir (set...) como resgatar(get...)
    public string $genero;
    private array $notas = [];
    // com as propriedades sendo privadas,eu não consigo alterar fora da classe filme

    function avaliar (float $nota) :void{
        $this->notas[ ] = $nota;        
    }

    public function media() :float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }

    public function setAnoLancamento(int $anoLancamento):void
    {
        $this -> anoLancamento = $anoLancamento;
    }
    // Nesse caso, set não tem retorno por estar definindo o valor da propriedade ano lançamento

    public function getAnoLancamento():int{
        return $this -> anoLancamento;
    }
    // Enquanto o get tem retorno por estar buscando o valor da propriedade ano lançamento 

} //criando um classe. Um classe nada mais é do que um template
  
