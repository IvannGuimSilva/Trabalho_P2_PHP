<?php

require_once 'ClasseEscritorio.class.php';
require_once 'Escritorio1.php';
require_once 'Escritorio2.php';

$escritorio2 = new Escritorio2(
    [
        "Pedro" => "Contador", 
        "Sergio" => "Gerente",
        "Francisco" => "Contador",
        "Evelyn" => "Administrador de TI",
        "Ivan" => "Administrador de TI",
        "Breno" => "Contador",
    ],
    [
        1 => "Gestão de Investimentos"
    ]
);

echo "<h3>Empregados e suas Funcionalidades:</h3>";

echo $escritorio2->get_empregados();

?>

<style>

h3, p {font-family: monospace;}

</style>