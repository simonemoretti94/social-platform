<!-- TEMPLATE -->
<section id="sidebar">
    <?php

    //importing db
    require __DIR__ . '/../db.php';
    ?>
    <div class="container-fluid">
        <?php
        if ($result && $result->num_rows > 0) {

            //iterating into db's fetch result
            while ($row = $result->fetch_assoc()) : ?>

                <!-- creating columns filled with values received from db's query-->
                <div id="user-sidebar-<?= $row['id'] ?>">
                    <i id="close-icon-<?= $row['id'] ?>" class="fa-solid fa-x"></i>
                    <div id="user-data">
                        <p id="username"><?= $row['username']; ?></p>
                        <div id="wrapper-sidebar">
                            <p id="user-id">id: <?= $row['id']; ?></p>
                            <p id="user-likes">likes: <?= $row['tot_likes']; ?></p>
                        </div>
                    </div>
                </div>

        <?php endwhile;
        } else if ($result) {
            echo '0 results';
        } else {
            echo 'query error';
        };
        ?>
    </div>
</section>