<?php

$servidor = "cursophpleo_db_1";
$usuario = "root";
$senha ="phprs";
$banco = "sistema_curso";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao tentar conectar ao banco de dados".$conn->connect_error);
}

?>