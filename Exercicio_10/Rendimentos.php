<?php

include_once 'Conta_Poupanca.php';

class Rendimentos extends Conta_Poupanca {

    private $rendimento;

    public function __construct($agencia, $conta, $saldo) 
    {
        parent::__construct($agencia, $conta, $saldo);
    }

    public function calc_rendimento(
        $taxa_selic, 
        $taxa_tr, 
        $vl_Depositado, 
        $meses) 
    {
        if ($taxa_selic <= 8.5) {
            $this->rendimento = ((70 /100 * $taxa_selic) + $taxa_tr) * $meses;
        }

        else if ($taxa_selic > 8.5) {
            $this->rendimento = (($vl_Depositado * 0.50) + $taxa_tr) * $meses;
        }

        return $this->rendimento;
    }
    
}

?>