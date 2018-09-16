<?php
require 'views/partials/head.php';
?>

<ul>
    <?php foreach ($tasks as $task):?>
        <li>

                <?php if($task->completed):?>
                <strike><?php echo $task->description?></strike>
                <?php else: ?>
                <?php echo $task->description?>
                <?php endif;?>

        </li>
    <?php endforeach?>
</ul>

<form method="get" action="/name">
    <input name="name">
    <button type="submit"><Submit></Submit></button>

</form>
<?php require 'views/partials/foot.php'?>