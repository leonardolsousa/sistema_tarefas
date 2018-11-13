<?php

header("Content-type:text/html; charset=ISO-8859-1");

$servidor = "cursophpleo_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "sistema_curso";

$conn = new mysqli ($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Erro ao tentar conectar ao banco de dados:".$conn->connect_error);
}

$sql = "SELECT * FROM tarefas";
$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "ID: ".$row["id"]."<br>";
        echo "Nome: ".$row["nome"]."<br>";
        echo "Detalhes: ".$row["detalhes"]."<br>";
        echo "Status: ".$row["status"]."<br>";
    }  
    
}else{
    echo "retornou nada";
}

$conn->close();




?>