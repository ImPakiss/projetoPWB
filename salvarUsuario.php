<?php include "conexao.php";

if(isset($_POST) > 0)
{
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $ativo = $_POST["ativo"];

    if(empty($nome) )
    {
        echo "Nome está em branco";
    }

    $sql = "INSERT INTO usuarios (nome, login, senha, ativo)";
    $sql .= "values ('$nome', '$login', '%senha', 1 )";

    mysqli_query($conexao, $sql);

    header('location:usuarios.php?mensagem=Cadastrado com sucesso');
}
else
{
header('location: usuarios.php?');
}

?>