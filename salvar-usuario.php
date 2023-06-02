<?php
$nome = $_POST["nome"];
$nome = $_POST["rua"];
$nome = $_POST["bairro"];
$nome = $_POST["cidade"];
$nome = $_POST["estado"];
$nome = $_POST["telefone"];
$nome = $_POST["site"];
$email = $_POST["email"];
$senha = $_POST["senha"];

  include "conexao.php";

    $sql_inserir_usuario = "insert into usuario(nome, rua, bairro, cidade, estado, telefone, site, email, senha,) values('$nome', '$rua', '$bairro', '$cidade', '$estado', '$telefone', '$site','$email','" . md5($senha) . "')";

    $um_usuario = mysqli_query($conexao, $sql_inserir_usuario);
    mysqli_close($conexao);

    header("location:novo-usuario.php?msg=sucesso");
?>