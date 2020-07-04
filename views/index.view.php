<?php require('partials/head.php') ?>

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

<?php require('partials/footer.php') ?>