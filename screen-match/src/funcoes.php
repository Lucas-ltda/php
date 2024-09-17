<?php

function exibeMensagemLancamento($ano): void {
    if($ano >= 2022){
        echo "Filme lançamento\n";
    }else if($ano > 2020 && $ano < 2022){
        echo "Filme recente\n "; 
    }else{
        echo "Filme mais antigo \n";
    }
};

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
        return $planoPrime || $anoLancamento < 2020;
};


function criarFilme(string $nome, int $anoLancamento , float $nota, string $genero ) : filme {

    $filme = new Filme();

    $filme -> nome = $nome;
    $filme -> anoLancamento = $anoLancamento;
    $filme -> genero = $genero;
    $filme -> nota = $nota;

    return $filme;
    
};
//criação de uma função construtora que irá "construir" os filmes de acordo com os parametros passados
