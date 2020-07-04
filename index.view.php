<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <style>
        header {
            background-color: #c4c4c4;
            padding: 2em;
            text-align: center;
        }

        .icon {
            background-color: green;
        }
    </style>
</head>
<body>

<ul>
    <h1>Tasks for the day</h1>

    <?php foreach ($tasks as $task): ?>

        <?php if ($task->completed): ?>
            <strike>
        <?php endif; ?>
        <li>
            <?= $task->description ?>
        </li>
        <?php if ($task->completed): ?>
            </strike>
        <?php endif; ?>
    <?php endforeach; ?>

</ul>

</body>
</html>