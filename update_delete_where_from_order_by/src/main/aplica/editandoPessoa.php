<?php

if (isset($_POST["btn_editar"])) {

    $id_pessoaEscolhida = $_POST["pessoaEscolhida"];
    $nome_editado = $_POST["nome_pessoa"];
    $idade_editada = $_POST["idade_pessoa"];
    $sexo_editado = $_POST["sexo_pessoa"];
    

    // estabelecendo conexão...

    $host = '127.0.0.1';
    $user = 'root';
    $password = 'mypassword';
    $bd =  'mysql_php_01';
                
    $conn = mysqli_connect($host, $user, $password, $bd);

    // fazendo consulta p/ edição da pessoa escolhida...

    $sexo_inserido;

    $sexo_editado === "Masculino" ? $sexo_inserido = 'M' : $sexo_inserido = 'F';
                
    $consulta = "UPDATE Pessoa 
                    SET nm_pessoa = '$nome_editado', 
                        qt_idade = '$idade_editada',
                        sg_sexo = '$sexo_inserido' 
                            WHERE id_pessoa = $id_pessoaEscolhida";

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