<?php
    require_once("autenticacao.php");

    $nome = $_POST["nome"];
    $detalhes = $_POST["detalhes"];
    $status = 0;
    if($_POST["status"] == "on"){
        $status = 1;
    }
    $id = $_POST["id"];


    if($id < 1){
        $sql = "INSERT INTO tarefas ";
        $sql .= " (nome, detalhes, status) ";
        $sql .= " VALUES ";
        $sql .= " ('$nome', '$detalhes', $status) ";
    }else{
        $sql = " UPDATE tarefas ";
        $sql .= " SET ";
        $sql .= " nome = '$nome' ";
        $sql .= " ,detalhes = '$detalhes' ";
        $sql .= " ,status = $status ";
        $sql .= " WHERE ";
        $sql .= " id = $id ";
    }

    require_once("criar_conexao.php");

    if($conn->query($sql) === TRUE){
        echo "Registro gravado com sucesso";
    }else{
        echo "Erro ao tentar executar a query:<br>";
        echo $sql."<br><br>";
        echo "Ocorreu o seguinte erro:<br>";
        echo $conn->error;
    }

?>
<br><br>

<a href="index.php">Voltar</a>