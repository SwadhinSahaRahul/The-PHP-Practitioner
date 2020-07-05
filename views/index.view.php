<?php require('partials/head.php') ?>

    <h1>Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= $user->name ?>
            </li>
        <?php endforeach; ?>

    </ul>

    <h2>Submit Your Name</h2>
    <form action="/name" method="post">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php') ?>