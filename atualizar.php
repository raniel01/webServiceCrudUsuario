<?php
include('conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$codigo = $_POST['codigo'];

$query = "update tb_usuario set nm_usuario = '$nome', ds_email = '$email', ds_senha = '$senha' where cd_ususario = $codigo";

mysqli_query($conecta, $query);

echo "Cadastro alterado com sucesso";