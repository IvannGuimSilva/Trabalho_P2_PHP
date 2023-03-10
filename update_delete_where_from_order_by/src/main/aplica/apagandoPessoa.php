<?php

if (isset($_POST["btn_apagar"])) {

    $id_pessoaEscolhida = $_POST["pessoaEscolhida"];
    
    $host = '127.0.0.1';
    $user = 'root';
    $password = 'mypassword';
    $bd =  'mysql_php_01';
                
    $conn = mysqli_connect($host, $user, $password, $bd);
                
    // realizar consulta p/ apagar pessoa escolhida...
                
    $consulta = "DELETE FROM Pessoa WHERE id_pessoa = $id_pessoaEscolhida";

    // realizar consulta na conexão escolhida, ver se a conexão funcionou 
    // e dps fechar conexão...

    mysqli_query($conn, $consulta);

    mysqli_close($conn);

    header("Location: mostrarPessoas.php");
    exit();
}

else 
{
    echo "<script>javascript:history.back(-2)</script>";
}

?>