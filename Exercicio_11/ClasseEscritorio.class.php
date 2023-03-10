<?php

abstract class ClasseEscritorio {

    protected $empregados;
    protected $servicos;

    public function __construct($empregados, $servicos) 
    {
        $this->empregados = $empregados;
        $this->servicos = $servicos;
    }

    abstract public function get_gerentes();

    abstract public function get_empregados();

    abstract function get_servicos();
}

?>