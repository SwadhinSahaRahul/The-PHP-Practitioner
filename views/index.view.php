<?php require('partials/head.php') ?>

    <!--<ul>
        <h1>Tasks for the day</h1>

        <?php /*foreach ($tasks as $task): */ ?>

            <?php /*if ($task->completed): */ ?>
                <strike>
            <?php /*endif; */ ?>
            <li>
                <? /*= $task->description */ ?>
            </li>
            <?php /*if ($task->completed): */ ?>
                </strike>
            <?php /*endif; */ ?>
        <?php /*endforeach; */ ?>

    </ul>-->

    <h2>Submit Your Name</h2>
    <form action="/name" method="post">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php') ?>