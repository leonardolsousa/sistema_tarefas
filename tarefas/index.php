<?php
    session_start();


    if($_SESSION["autenticado"] != 1){
        $location = "location:login.php";
    }else{
        $location = "location:listar_tarefas.php";
    }

    header($location);
 
?>