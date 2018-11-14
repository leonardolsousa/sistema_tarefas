<?php

    $nome = $_POST["nome"];
    $detalhes = $_POST["detalhes"];
    $status = 0;
    if($_POST["status"] == "on"){
        $status = 1;
    }

    $sql = "INSERT INTO tarefas ";
    $sql .= " (nome, detalhes, status) ";
    $sql .= " VALUES ";
    $sql .= " ('$nome', '$detalhes', $status) ";

    require_once("criar_conexao.php");

    if($conn->query($sql) === TRUE){
        echo "Registro inserido com sucesso";
    }else{
        echo "Erro ao tentar executar a query:<br>";
        echo $sql."<br><br>";
        echo "Ocorreu o seguinte erro:<br>";
        echo $conn->error;
    }

?>
<br><br>

<a href="index.php">Voltar</a>