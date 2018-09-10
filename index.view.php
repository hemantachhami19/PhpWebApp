<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        header{
            background-color: red;
            padding: 2px;
            text-align: center;
        }
    </style>

</head>
<body>
<header>
    <h1>Hello <?php echo $name;?></h1>
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