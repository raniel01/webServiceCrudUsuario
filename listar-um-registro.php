<?php
include('conn.php');

$codigo = $_GET['codigo'];

$query = "SELECT * FROM tb_usuario where cd_usuario = $codigo";

$result = mysqli_query($conecta;$query);

while($linha = mysqli_fetch_assoc($result)){
    $registros = array(
        'pessoa' => array(
        'codigo'=>$linha['cd_usuario'],
        'nome'=>$linha['nm_usuario'],
        'email'=>$linha['ds_email'],
        'senha'=>$linha['ds_senha'] 
        )
    );
}

echo json_encode($registros);