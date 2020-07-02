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

        .icon{
            background-color: green;
        }
    </style>
</head>
<body>

<ul>
    <h1>Task for the day</h1>

    <?php foreach ($task as $heading => $value): ?>
        <li>
            <strong><?= ucwords($heading) ?></strong>: <?= "$value" ?>
        </li>
    <?php endforeach; ?>

    <hr>

    <li>
        <strong>Name </strong>: <?= $task['title'] ?>
    </li>
    <li>
        <strong>Due date </strong>: <?= $task['due'] ?>
    </li>
    <li>
        <strong>Assigned to </strong>: <?= $task['assigned_to'] ?>
    </li>
    <li>
        <strong>Completed </strong>:
<!--        --><?//= $task['completed'] ? 'Complete' : "Incomplete" ?>

        <?php if ($task['completed']): ?>
            <span class="icon">&#9989</span>
        <?php else: ?>
            Incomplete
        <?php endif; ?>
    </li>

</ul>

</body>
</html>