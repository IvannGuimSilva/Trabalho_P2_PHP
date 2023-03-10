<?php

require_once 'ClasseEscritorio.class.php';
require_once 'Escritorio1.php';

$escritorio = new Escritorio1(
    [
        "Pedro" => "Contador", 
        "João" => "Contador",
        "Sergio" => "Gerente",
        "Francisco" => "Contador",
        "Ivan" => "Administrador de TI",
        "Mariano" => "Administrador de TI",
        "Bruno" => "Gerente",
    ],
    [
        1 => "Analise de Impostos",
        2 => "Gestão de Investimentos"
    ]
);

echo "<h3>
        <strong>Lista de empregados da empresa: </strong>
     </h3>";
echo $escritorio->get_empregados() . "\n";

echo "<h3>
        <strong>Serviços oferecidos pela empresa: </strong>
      </h3>";
echo $escritorio->get_servicos() . "\n";

echo "<h3>
        <strong>Gerentes da empresa: </strong>
      </h3>";
echo $escritorio->get_gerentes() . "\n";

echo "<h3>
        <strong>Equipe de TI da empresa: </strong>
      </h3>";
echo $escritorio->get_equipeTI() . "\n";

?>

<style>
    /* - CSS: --> */   h3,p { font-family:Monospace; }
</style>