<?php
include('conn.php');

$codigo = $_POST['codigo'];

$query = "delete from tb_usuario where cd_usuario = $codigo";

mysqli_query($conecta, $query);

echo "Registro removido com sucesso";