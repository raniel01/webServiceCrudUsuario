<?php
$conecta = mysqli_connect("localhost","id11034011_crudusuario", "crudusuario", "id11034011_crudusuario");
                         //local        usuario                     senha          banco
//Codificação de caracteres em UTF-8
$conecta->query("SET NAMES 'utf8'");
$conecta->query('SET character_set_connection=utf8');
$conecta->query('SET character_set_client=utf8');
$conecta->query('SET character_set_results=utf8');
// -- Codificação de caracteres em UTF-8
