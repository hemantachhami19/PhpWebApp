<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="about">About Us</a> </li>
            <li><a href="contact">Contact Us</a> </li>
        </ul>
    </nav>
</header>

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
</body>
</html>