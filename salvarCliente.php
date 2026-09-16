<?php 
include "conexao.php";

if(!empty($_POST))
{
    $id = $_POST["id"] ?? null;
    $nome = $_POST["nome"];
    $cpf_cnpj = $_POST["cpf_cnpj"]; 
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data = $_POST["datanasc"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $ativo = $_POST["ativo"] ?? 1;

    if(empty($nome))
    {
        echo "Nome está em branco";
        exit;
    }


    $sql = "INSERT INTO cliente (nome, cpf_cnpj, email, telefone, data_nascimento, 
    logradouro, numero, complemento, bairro, cidade, estado, cep, ativo) 
    VALUES ('$nome', '$cpf_cnpj', '$email', '$telefone', '$data', 
    '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$cep', 1)";

    mysqli_query($conexao, $sql);

    header('location:cliente.php?mensagem=Cadastrado com sucesso');
}
else
{
    header('location: cliente.php');
}
?>