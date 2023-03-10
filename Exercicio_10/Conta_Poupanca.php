<?php

include_once 'Conta_Bancaria.class.php';

class Conta_Poupanca extends Conta_Bancaria {

    public function __construct($agencia, $conta, $saldo) 
    {
        parent::__construct($agencia, $conta, $saldo);
    }

    function retirar($quantia) {

        if($this->saldo >= $quantia) 
        {
            $this->saldo -= $quantia;
        }

        else {

            return false; // retirada não permitida
        }

        return true; // retirada permitida
    }

    public function contabilizar($saldo) 
    {
        $this->saldo += 110.43;
        print "Acesso pela classe Conta_Poupança" . "\n";
    }
}

?>