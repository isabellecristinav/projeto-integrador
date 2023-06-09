<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fabricante</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #6B41A6, #D9483B);
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
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        button:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" placeholder="Nome">
            <br><br>
            <input type="password" placeholder="Senha">
            <br><br>
            <button>Entrar</button>
            <br></br>
            <button>Cadastrar</button>
            <br></br>
        </form>
    </div>
</body>

</html>