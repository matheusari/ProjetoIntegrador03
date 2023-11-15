<?php

    if(isset($_POST['submit'])) 
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $fotografos = $_POST['fotografos'];
        $modelo = $_POST['modelo'];
        $inicio = $_POST['inicio'];
        $termino = $_POST['termino'];
        $observacoes = $_POST['observacoes'];

        $result = mysqli_query($conexao, "INSERT INTO Jobs(nome,fotografos,modelo,inicio,termino,observacoes) 
        VALUES ('$nome','$fotografos','$modelo','$inicio','$termino','$observacoes')");
    }
        // Consulta os dados do banco de dados
        $query = "SELECT * FROM Jobs";
        $result = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda do Fotógrafo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: bisque;
            display: flex;
            height: 100vh;
            margin: 0;
        }

        .retangulo {
            font-size: 13px;
            flex-direction: column;
            width: auto;
            height: auto;
            background-color: white;
            border-radius: 30px;
            padding: 30px;
            gap: 15px;
        }

        .fotografos,
        .modelo,
        .inicio,
        .termino,
        .maquiador,
        .observacoes,
        .nome {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            margin-bottom: 15px;
        }

        .titulo {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .input-text,
        .input-date {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .botoes {
            width: 100%;
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .botao {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
        }

        .cadastrar {
            background-color: orange;
            color: white;
        }

        .cadastrar:hover {
            background-color: red;
            color: white;
            transition: 0.4s;
        }

        .form {
            width: 100%;
        }

        .tabela {
        width: 100%;
        border: 1px solid orange;
        border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="retangulo">
        <form class="form" action="index.php" method="POST">
            <div class="nome">
                <div class="titulo">Insira um nome para o projeto</div>
                <input type="text" name="nome" class="input-text" placeholder="Digite o título do job"
                    id="nome-input">
            </div>

            <div class="fotografos">
                <div class="titulo">Digite o nome do fotógrafo do 'job'</div>
                <input type="text" name="fotografos" class="input-text"
                    placeholder="Digite o nome do responsável pela fotografia" id="fotografo-input">
            </div>

            <div class="modelo">
                <div class="titulo">Insira o nome do(a) modelo</div>
                <input type="text" name="modelo" class="input-text" placeholder="Digite o nome do(a) modelo">
            </div>

            <div class="inicio">
                <div class="titulo">Informe a data de início do 'job'</div>
                <input type="date" name="inicio" class="input-date">
            </div>

            <div class="termino">
                <div class="titulo">Agora, informe a data de término</div>
                <input type="date" name="termino" class="input-date">
            </div>

            <div class="observacoes">
                <div class="titulo">Observações</div>
                <input type="text" name="observacoes" class="input-text"
                    placeholder="Digite aqui observações pertinentes ao 'job'">
            </div>

            <div class="botoes">
                <input type="submit" name="submit" id="submit" class="botao cadastrar" onclick="cadastrarJob()"></input>
            </div>
            </form>
    
        <table class="tabela">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Fotógrafos</th>
                <th>Modelo</th>
                <th>Início</th>
                <th>Término</th>
                <th>Observações</th>
            </tr>

            <?php
        // Itera sobre os resultados da consulta
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['fotografos']}</td>";
            echo "<td>{$row['modelo']}</td>";
            echo "<td>{$row['inicio']}</td>";
            echo "<td>{$row['termino']}</td>";
            echo "<td>{$row['observacoes']}</td>";
            echo "</tr>";
        }
    ?>

        </table>
    </div>
</body>

</html>