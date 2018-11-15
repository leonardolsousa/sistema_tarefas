<?php
    session_start();

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios ";
    $sql .= " WHERE email = '$email' AND senha = '$senha' ";


    require_once("criar_conexao.php");


    $result = $conn->query($sql);

    if($result->num_rows == 1){

        $_SESSION["autenticado"] = 1;
        echo "Usuário autenticado com sucesso!";

    }else{

        echo "Usuário e senha incorretos!";

    }

?>
<br><br>
<a href="index.php">Voltar</a>