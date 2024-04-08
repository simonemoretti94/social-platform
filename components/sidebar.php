<style scoped>
    div[id^="user-sidebar"] {
        width: 90%;
        display: flex;
        flex-direction: row;
        border: solid 1px white;
        place-items: center;
        margin-bottom: .5rem;
        border-radius: 3px;

        & * {
            text-wrap: wrap;
        }

        >i {
            flex: 20%;
            font-size: 30px;
            text-align: center;
        }

        & div#user-data {
            flex: 80%;

            margin: auto;
            display: flex;
            flex-direction: column;

            >p#username {
                text-align: start;

            }

            &div#wrapper {
                display: flex;
                flex-direction: row !important;

                & p#user-id,
                p#user-likes {
                    width: 50%;
                }
            }
        }
    }
</style>

<section id="sidebar">
    <?php
    require __DIR__ . '/../db.php';
    ?>
    <div class="container-fluid">
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) : ?>

                <div id="user-sidebar-<?= $row['id'] ?>">
                    <i class="fa-solid fa-user"></i>
                    <div id="user-data">
                        <p id="username"><?= $row['username']; ?></p>
                        <div id="wrapper">
                            <p id="user-id"><?= $row['id']; ?></p>
                            <p id="user-likes"><?= $row['tot_likes']; ?></p>
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