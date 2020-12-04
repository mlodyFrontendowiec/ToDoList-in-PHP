<h1 class="newTask">Dodaj nowe zdanie</h1>
<form class="addNewTask" method="POST" action="/?action=createTask">
    <label>Tytuł <input type="text" name="title" autocomplete="off" required /></label><br />
    <label>Opis <input type="text" name="description" autocomplete="off" /></label><br />
    <label>Termin wykonania <input type="date" name="date" autocomplete="off" /></label><br />
    <input type="submit" class="send">
</form>