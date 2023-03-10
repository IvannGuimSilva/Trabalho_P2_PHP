<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atividade MySQL - Pessoa criada</title>
        <style>

            * { box-sizing: border-box; }

            html, body { font-family: monospace; background-color: #c6edff; }

        </style>
    </head>
</html>

<?php

// caso a pessoa tenha ido até a página após ter usado o btn para
// enviar dados ao formulário...

if (isset($_POST["btn_enviar"])) {

    // os campos assinalados por ela serão definidos junto com a conexão c/ o bd...
    
    $nome_digitado = $_POST["nome_pessoa"];
    $idade_digitada = $_POST["pessoa_idade"];
    $sexo_escolhido = $_POST["pessoa_sexo"];


    $host = '127.0.0.1';
    $user = 'root';
    $password = 'mypassword';
    $bd =  'mysql_php_01';

    $conn = mysqli_connect($host, $user, $password, $bd);

    $consulta;

    // dependendo doq a pessoa escolher, a consulta fará certa ação...


    $sexo_inserido;

    $sexo_escolhido === "Masculino" ? $sexo_inserido = 'M' : $sexo_inserido = 'F';

    $consulta = "INSERT INTO Pessoa (nm_pessoa, qt_idade, sg_sexo) 
        VALUES ('$nome_digitado', '$idade_digitada', '$sexo_inserido')";


    // realizar consulta na conexão escolhida, ver se a conexão funcionou 
    // e dps fechar conexão...
    

    mysqli_query($conn, $consulta);

    mysqli_close($conn);

    header("Location: mostrarPessoas.php");
    exit();
}

else {
    echo "<script>javascript:history.back(-2)</script>";
};

?>