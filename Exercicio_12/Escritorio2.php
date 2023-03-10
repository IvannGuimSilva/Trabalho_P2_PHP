<?php

require_once 'Escritorio1.php';

class Escritorio2 extends Escritorio1 {

    public function get_empregados() 
    {
        $n_empregados = 1;
        $n_contador = 1;
        $n_admTI = 1;
        $n_gerente = 1;

        foreach($this->empregados as $pessoa => $cargo) 
        {
            switch($cargo) {
                
                case "Contador":
                    echo "<p><strong>Empregado {$n_empregados}</strong></p>";     
                    echo "<p>{$pessoa} | Contador nº{$n_contador}</p>";
                    $n_contador++;
                    break;

                case "Administrador de TI":
                    echo "<p><strong>Empregado {$n_empregados}</strong></p>";     
                    echo "<p>{$pessoa} | Administrador de TI nº{$n_admTI}</p>";
                    $n_admTI++;
                    break;

                case "Gerente":
                    echo "<p><strong>Empregado {$n_empregados}</strong></p>";     
                    echo "<p>{$pessoa} | Gerente nº{$n_gerente}</p>";
                    $n_gerente++;
                    break;
            }
            $n_empregados++;
        }
    }

}

?>