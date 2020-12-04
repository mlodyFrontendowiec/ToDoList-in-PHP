<table class="table_data">
    <tr class="table_header">
        <th>Nr</th>
        <th>Tytuł</th>
        <th>Data</th>
    </tr>

    <?php foreach ($tasks as $task):?>
    <tr class="table_content">
        <td><?php echo  $task['id'] ?>
        </td>
        <td><?php echo  $task['title'] ?>
        </td>
        <td><?php echo  $task['created'] ?>
        </td>
    </tr>
    <?php endforeach;?>
</table>