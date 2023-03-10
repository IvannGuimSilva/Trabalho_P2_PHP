<?php

require_once 'ClasseEscritorio.class.php';

class Escritorio1 extends ClasseEscritorio {

    public function get_gerentes() 
    {
        $n_gerente = 1;
        foreach($this->empregados as $empregado => $cargo) 
        {
            if ($cargo === "Gerente") {
                echo "<p>Gerente {$n_gerente} - Nome: {$empregado}</p>";
                $n_gerente++;
            }
        }
    }

    public function get_equipeTI() 
    {
        $n_adm = 1;
        foreach($this->empregados as $empregado => $cargo) 
        {
            if ($cargo === "Administrador de TI") {
                echo "<p>Admn. de TI {$n_adm} - Nome: {$empregado}</p>";
                $n_adm++;
            }
        }
    }

    public function get_empregados() 
    {
        foreach($this->empregados as $empregado => $cargo) 
        {
            echo "<p>Nome: {$empregado} - Cargo: {$cargo}</p>";
        }
    }

    public function get_servicos() 
    {   
        foreach($this->servicos as $value => $servico) 
        {
            echo "<p>Serviço {$value}: {$servico}</p>";
        }
    }
}

?>