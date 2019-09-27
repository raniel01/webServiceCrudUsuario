<?php
$conecta = mysqli_connect("localhost","id11034011_crudusuario", "crudusuario", "id11034011_crudusuario")
                         //local        usuario                     senha          banco
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "insert into tb_usuario values (null, '$nome', '$email', '$senha')";

mysqli_query($conecta, $query);

echo "Cadastrado com sucesso!";