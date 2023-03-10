<?php

require_once 'Conta_Bancaria.class.php';
require_once 'Conta_Poupanca.php';
require_once 'Rendimentos.php';


function format($valor) 
{
    return number_format($valor,2,',','.');
}


$conta = new Rendimentos(998877, 'RD.11111.11', 10000);

print "Conta: {$conta->get_info()}" . "\n";
print "Saldo Atual: " . format($conta->get_saldo()) . "\n";

$valor_depositado = $conta->depositar(35000);

print "Deposito feito - Valor depositado: " . format($valor_depositado) . "\n";

print "Saldo Atual: " . format($conta->get_saldo()) . "\n";

$taxa_selic = 8.5;
$taxa_tr = 0.069;
$mesesPassados = 12;

$rendimento = $conta->calc_rendimento(
                        $taxa_selic, 
                        $taxa_tr, 
                        $conta->get_saldo(), 
                        $mesesPassados);

print "---------------------------------------------------------" . "\n";
print "- Baseando-se no tempo de {$mesesPassados} meses passados " . "\n";
print "- Investindo " . format($conta->get_saldo())  . " com uma Taxa Selic atual de {$taxa_selic}(%)" . "\n";
print "- Mais a taxa TR valendo {$taxa_tr}" . "\n";
print "---------------------------------------------------------" . "\n";
print "Investimento: " . format($conta->get_saldo() + $rendimento) . " acumulados em {$mesesPassados} mês / meses.";

?>