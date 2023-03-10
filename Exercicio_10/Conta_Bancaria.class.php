<?php

class Conta_Bancaria {

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo) 
    {
        $this->agencia = $agencia;
        $this->conta = $conta;  
        if($saldo > 0) {
            $this->saldo = $saldo;
        }
    }

    public function get_info() 
    {
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }

    public function depositar($quantia) 
    {
        if($quantia > 0) {
            $this->saldo+=$quantia;
        }

        return $quantia;
    }

    public function get_saldo() 
    {
        return $this->saldo;
    }

    public function contabilizar($saldo) 
    {
        $this->saldo += 60.55;
        print "Acesso pela classe Conta_Bancária" . "\n";
    }
}

?>