<?php
$numero = 0;
$saldoAltual = 1000.50;
while ($numero != 4) {
    echo"Digite o numero da operação que deseja: \n";
    echo "1 para Saldo\n";
    echo "2 para Deposito\n";
    echo "3 para Sacar\n";
    echo "4 para finalizar\n";

    $operacaoMenu = fgets(STDIN) ;
    switch ($operacaoMenu) {
        case 1:
            $numero = $operacaoMenu;
            echo"Seu saldo atual é: R$ ".$saldoAltual."\n";
            break;
        case 2: 
            $numero = $operacaoMenu;
            echo"Digite o valor do Deposito\n";
            $valorDeposito = fgets(STDIN) ;
            $saldoAltual += $valorDeposito;
            echo"Deposito Realizado!\n";
            echo"Seu saldo atual é de:\n". "R$".$saldoAltual."\n";
            break;
        case 3: 
            $numero = $operacaoMenu;
            echo"Digite o valor do saque\n";
            $valorSaque = fgets(STDIN);
            if ($valorSaque > $saldoAltual) {
                echo"Valor invalido!!! Valor do saque é maior do que o valor do saldo atual.\n";
            }else{
                $saldoAltual -= $valorSaque;
                echo"Valor sacado com sucesso!\n";
                echo"Seu saldo atual é de: ".$saldoAltual."\n";
            }
            break;
        case 4:
            $numero = $operacaoMenu;
            break;
        default:
            echo"Valor não reconhecido";
            break;
    }
};
 