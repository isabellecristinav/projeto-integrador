<?php
Plugin Name: Meu Plugin
Description: Descrição do meu plugin.
Version: 1.0
Author: Seu Nome
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(comida.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        div {
            background-color: rgb(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        button {
            background-color: #7A7A7A;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #efa765;
            font-size: 15px;
        }

        button:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }

        h1 {
            text-align: center;
            color: #efa765;
        }

        fonte {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <h1>Cadastro</h1>
        <form method="post" action="salvar-usuario.php">
            <input type="text" placeholder="Nome">
            <br><br>
            <input type="text" placeholder="Telefone">
            <br><br>
            <input type="text" placeholder="E-mail">
            <br><br>
            <input type="password" placeholder="Senha">
            <br><br>
            <button type="submit" class="fonte">Cadastrar</button>
            <br></br>
        </form>
        <?php
        $mensagem = $_GET["msg"] ?? "";
        if ($mensagem == "sucesso") {
            echo "<em class= 'text-success'>Usuário cadastrado com sucesso.</em>";
        }
        ?>
    </div>
</body>

</html>