<?php

    include_once 'Carros.class.php';

    $novoCarro = new Carros();

    $novoCarro->set_marca($_POST['typed_brand']);
    $novoCarro->set_cor($_POST['typed_color']);
    $novoCarro->set_modelo($_POST['typed_model']);
    $novoCarro->set_preco($_POST['typed_price']);

    echo $novoCarro->get_marca() . "\n";
    echo $novoCarro->get_cor() . "\n";
    echo $novoCarro->get_modelo() . "\n";
    echo $novoCarro->get_preco() . "\n";

?>