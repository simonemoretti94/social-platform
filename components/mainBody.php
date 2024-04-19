<!-- TEMPLATE -->
<section id="main-body">
    <?php

    //importing db
    require __DIR__ . '/../db.php';
    ?>
    <div id="mainbody-container" class="container-fluid">

        <?
        //iterating into db's fetch result
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) : ?>

                <div id="col-main-<?= $row['id']; ?>" class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div id="user-mainbody-<?= $row['id']; ?>">
                        <p id="username"><strong>user: </strong><span><?= $row['username']; ?></span></p>
                        <div class="wrapper">
                            <p id="user-id"><strong>id: </strong> <span><?= $row['id']; ?></span></p>
                            <p id="user-likes"><strong>likes: </strong><span><?= $row['tot_likes'] ?><span></p>
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