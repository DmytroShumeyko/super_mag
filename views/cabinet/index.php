<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <h1>User cabinet</h1>
                <h3>Hi, <?php echo $user['name']; ?></h3>

                <ul>
                    <li><a href="/cabinet/edit/">Edit user data</a> </li>
                    <li><a href="/cabinet/history/">Orders history</a> </li>
                </ul>
            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/footer.php'; ?>