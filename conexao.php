<?php 
$servidor = "localhost";
$banco = "AulaDB";
$senha = "";
$usuario = "root";

$sql = "Create database if not EXISTS AulaDb;";

$conexao = mysqli_connect($servidor, $usuario, $senha);

$resultado = mysqli_query($conexao, $sql);

mysqli_select_db($conexao, "AulaDb");

?>