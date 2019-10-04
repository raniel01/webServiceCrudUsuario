<?php
include('conn.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if($email != ""){
    $query = "insert into tb_usuario values (null, '$nome', '$email', '$senha')";
    mysqli_query($conecta, $query);
    echo "Cadastrado com sucesso!";
}else{
    echo "Erro ao registrar cadastro";
}
