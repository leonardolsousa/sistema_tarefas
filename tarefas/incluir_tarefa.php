<form action="gravar_tarefa.php" method="POST">

    <label>Nome da tarefa</label><br>
    <input type="text" name="nome" /><br><br>

    <label>Detalhes</label><br>
    <textarea name="detalhes"></textarea><br><br>

    
    <input type="checkbox" name="status" /><label>Concluída</label><br><br>

    <input type="submit" value="Gravar" />
    
</form>

<?php


?>