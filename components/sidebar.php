<!-- STYLE BEGINS HERE -->
<style scoped>
    div[id^="user-sidebar-"] {
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

            @media screen and (max-width: 800px) {
                font-size: 15px;
            }

            @media screen and (max-width: 500px) {
                font-size: 10px;
            }
        }


        & div#user-data {
            flex: 80%;

            margin: auto;
            display: flex;
            flex-direction: column;

            >p#username {
                text-align: start;

                @media screen and (max-width: 768px) {
                    text-align: center;
                    font-size: smaller;
                }
            }

            & div#wrapper-sidebar {
                width: 100%;
                display: grid;
                grid-template-columns: 30% 70%;

                @media screen and (max-width: 768px) {
                    grid-template-columns: 100%
                }

                & p#user-id,
                p#user-likes {
                    text-align: left;

                    @media screen and (max-width: 768px) {
                        text-align: center;
                        font-size: small;
                    }
                }
            }
        }
    }
</style>
<!-- STYLE ENDS HERE -->

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
                    <i class="fa-solid fa-user"></i>
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