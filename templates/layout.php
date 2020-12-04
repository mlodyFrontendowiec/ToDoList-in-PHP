<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link href="/public/style.css" rel="stylesheet">
</head>

<body>
    <h1 class="title"><a href="/?action=mainPage">To Do List</a></h1>
    
    <nav class="menu">
        <ul>
            <li><a href="/?action=mainPage">Lista notatek</a></li>
            <li><a href="/?action=createTask">Nowa notatka</a></li>            
        </ul>
    </nav>
    <?php require_once("templates/pages/$page.php")?>

</body>

</html>