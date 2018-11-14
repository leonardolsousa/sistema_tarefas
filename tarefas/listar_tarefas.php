<?php
    header("Content-type:text/html; charset=ISO-8859-1");
?>

<html>
    <head>
        <title>Listagem de Tarefas</title>
    </head>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            font-family: arial, sans-serif;
        }
        td, th{
            padding: 5px;
        }
        tr:nth-child(even){
            background-color: silver;
        }
        th{
            background-color: black;
            color: white;
        }
    </style>
    <body>

        <a href="incluir_tarefa.php">Incluir tarefa</a><br><br>

        <?php

        require_once("criar_conexao.php");        

        $sql = "SELECT * FROM tarefas";
        $result = $conn->query($sql);

        if($result->num_rows > 0){

                ?>
                <table width="100%">
            
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Detalhes</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                <?php
            while($row = $result->fetch_assoc()){

                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["detalhes"]."</td>";
                echo "<td>";
                echo ($row["status"]==0)?"A fazer":"Feita";
                echo "<td><a href='excluir_tarefa.php?id=".$row["id"]."'>Excluir</a></td>";
                echo "</tr>";
            }
            
            ?>
            </table>
            <?php
            
        }else{
            echo "retornou nada";
        }

        $conn->close();

        ?>
    </body>
</html>
