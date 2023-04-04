<?php require('partials/head.php'); ?>

    <h1>All Users</h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit Your Name</h1>

    <form method="POST" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>