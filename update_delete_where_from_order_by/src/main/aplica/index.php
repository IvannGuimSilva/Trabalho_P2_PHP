<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Atividade MySQL - Criar Pessoa</title>
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

        <!-- 1. - Criar aplicação para manipulação de banco de dados que utilize os seguintes
        comandos SQL: UPDATE, DELETE, além das condicionais WHERE, FROM,
        ORDER BY. -->

        <h2>Aplicação com BD nº1 <br> UPDATE, DELETE, WHERE FROM e ORDER BY. - (CRUD PHP)</h2>

        <h3>Crie uma nova pessoa:</h3>

        <form method="post" action="criarPessoa.php">
            <input type="text" name="nome_pessoa" placeholder="digite seu nome" required>
            
            <label for="lista_idades">Ponha sua idade:</label>
            <select id="lista_idades" name="pessoa_idade" required>
                <option value="">-- selecione uma idade --</option>
                <?php

                    for ($i = 1; $i <= 120; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }

                ?>
            </select>

            <label for="lista_idades">Ponha seu sexo:</label>
            <select id="lista_idades" name="pessoa_sexo" required>
                <option value="">-- selecione um sexo --</option>
                <option name="M">Masculino</option>
                <option name="F">Feminino</option>
            </select>

            <button type="submit" name="btn_enviar">Enviar</button>
        </form>
        
        <?php
            echo 
            "<p>
                <a href='mostrarPessoas.php'>
                    Lista de pessoas
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