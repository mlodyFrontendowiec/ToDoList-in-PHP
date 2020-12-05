<h1 class="newTask">Edytuj zadnie</h1>
<form class="addNewTask" method="POST"
    action="/?action=editTask&id=<?php echo $tasks['id']?>">
    <label>Tytuł <input type="text" name="title" autocomplete="off" required
            value="<?php echo $tasks['title']?>"></label><br />
    <label>Opis <input type="text" name="description" autocomplete="off"
            value="<?php echo $tasks['description']?>" /></label><br />
    <label>Termin wykonania <input type=" date" name="date" autocomplete="off" value=<?php echo $tasks['created']?>
        /></label><br />
    <input type="submit" class="send">
</form>