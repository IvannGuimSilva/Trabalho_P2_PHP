<?php

// definindo onde será minha  conexão...

$host = '127.0.0.1';
$user = 'root';
$password = 'mypassword';
$bd =  'mysql_php_01';

$conn = mysqli_connect($host, $user, $password, $bd);

// realizar consulta p/ mostrar pessoas gravadas no bd...

$consulta = "SELECT id_pessoa, nm_pessoa, qt_idade, sg_sexo from Pessoa
                WHERE sg_sexo = 'F'";

$result_consulta = mysqli_query($conn, $consulta); 

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atividade MySQL - Lista Mulheres</title>
        <style>

            * { box-sizing: border-box; }

            html, body { font-family: monospace; background-color: #c6edff; }
            
            table { border-collapse: collapse; background-color: #f2ffe2; }

            #titulos th {
                font-weight: bold !important;
                font-size: 1.25rem;
            }

            th { padding: 5px; border: 1px solid; }

        </style>
    </head>
    <body>
       
       <table>
            <tr id="titulos">
                <th>id</th>
                <th>Nome Pessoa</th>
                <th>Idade Pessoa</th>
                <th>Sexo Pessoa</th>
            </tr>

            <?php
       
                if($result_consulta) 
                {
                    // caso o resultado da consulta tenha sido positivo...
                        
                    while ($row = mysqli_fetch_assoc($result_consulta)) 
                    {
                        echo "<tr>
                                <th>" . $row['id_pessoa'] . "</th>
                                <th>" . $row['nm_pessoa'] . "</th>
                                <th>" . $row['qt_idade'] . "</th>
                                <th>" . $row['sg_sexo'] . "</th>
                              <tr>";
                    }
                }

                mysqli_close($conn); // fechando conexão :D
            ?>

        </table>

        <?php
            echo 
                "<p>
                    <a href='index.php'>
                        Criar nova pessoa
                    </a>
                </p>
                <p>
                    <a href='apagarPessoa.php'>
                        Apagar pessoa
                    </a>
                </p>
                <p>
                    <a href='editarPessoa.php'>
                        Editar pessoa
                    </a>
                </p>
                <p>
                    <a href='mostrarPessoas.php'>
                        Lista de pessoas
                    </a>
                </p>
                <p>
                    <a href='mostrarPorIdade.php'>
                        Lista de pessoas por ordem de idade
                    </a>
                </p>";
        ?>

    </body>
</html>