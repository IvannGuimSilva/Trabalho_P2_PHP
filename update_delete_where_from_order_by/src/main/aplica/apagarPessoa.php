<?php

$host = '127.0.0.1';
$user = 'root';
$password = 'mypassword';
$bd =  'mysql_php_01';
            
$conn = mysqli_connect($host, $user, $password, $bd);
            
// realizar consulta p/ mostrar pessoas gravadas no bd...
            
$consulta = "SELECT id_pessoa, nm_pessoa from Pessoa";
            
$result_consulta = mysqli_query($conn, $consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atividade MySQL - Apagar Pessoa</title>
        <style>

            * { box-sizing: border-box; }
            html, body { font-family: monospace; background-color: #c6edff; }
            input, button, select, label { 
                display: block; margin: 5px 0px;
                min-width: 185px; 
            }

        </style>
    </head>
    <body>

    <form method="post" action="apagandoPessoa.php">
        <label for="pessoaEscolhida">
            <h3>APAGUE uma dessas pessoas registradas:</h3>
        </label>
        <select name="pessoaEscolhida" required>
            <option value="">-- selecione uma pessoa --</option>

            <?php
                
                if($result_consulta) 
                {
                    // caso o resultado da consulta tenha sido positivo...
                            
                    while ($row = mysqli_fetch_assoc($result_consulta)) 
                    {
                        echo "<option value=" . $row['id_pessoa'] .">" . $row['nm_pessoa'] . "</option>";
                    }
                }

                mysqli_close($conn); // fechando conexão :D

            ?>
        </select>

        <button type="submit" name="btn_apagar">
            Apagar Pessoa Escolhida
        </button>
    </form>  
        
    <?php
        echo 
            "<p>
                <a href='index.php'>
                    Criar nova pessoa
                </a>
            </p>
            <p>
                <a href='mostrarPessoas.php'>
                    Mostrar pessoas
                </a>
            </p>
            <p>
                <a href='editarPessoa.php'>
                    Editar pessoa
                </a>
            </p>
            <p>
                <a href='mostrarPorIdade.php'>
                    Lista de pessoas por ordem de idade
                </a>
            </p>
            <p>
                <a href='mostrarMulheres.php'>
                    Lista de mulheres
                </a>
            </p>";
    ?>

    </body>
</html>