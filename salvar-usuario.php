<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

  include "conexao.php";

    $sql_inserir_usuario = "insert into usuario(nome, senha) values('$nome','" . md5($senha) . " ')";

    $um_usuario = mysqli_query($conexao, $sql_inserir_usuario);
    mysqli_close($conexao);

    header("location:login-fornecedor.php?msg=sucesso");
?>