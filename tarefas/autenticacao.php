<?php
    session_start();
        if($_SESSION["autenticado"] != 1){
            header("location:login.php");
        }
        