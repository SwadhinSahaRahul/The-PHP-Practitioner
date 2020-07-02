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
    </style>
</head>
<body>

<header>
    <h1><?= implode(', ', $names) ?></h1>
</header>

<ul>
    <?php foreach ($names as $name): ?>
        <li><?= $name ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>