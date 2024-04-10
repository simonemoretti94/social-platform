<!-- STYLE BEGINS HERE -->
<style scoped>
    .container-fluid {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;

        div[id^="col-main-"] {
            padding: 1rem;

            >div[id^="user-mainbody-"] {
                /* positioning items */
                display: flex;
                flex-direction: column;
                justify-content: space-around;

                /* styling box */
                border: solid .5px white;
                border-radius: 8px;
                box-shadow: 0 0 3px white;

                & * {
                    text-wrap: wrap;
                }

                #username,
                #user-id,
                #user-likes {
                    text-align: center;

                    >strong {
                        color: var(--blue);

                        @media screen and (max-width: 576px) {
                            font-size: medium;
                        }
                    }

                    & span {
                        font-style: italic;
                        font-size: medium;

                        @media screen and (max-width: 576px) {
                            font-size: x-large;
                        }
                    }
                }

                div.wrapper {
                    display: flex;


                    & p#user-id,
                    p#user-likes {
                        width: 50%;
                    }
                }

            }

            >div[id^="user-mainbody-"]:hover {
                background-color: var(--blue-light);
                filter: drop-shadow(0 0 5px var(--violet-dark));

                & span {
                    color: var(--dark-light);
                }
            }
        }
    }
</style>
<!-- STYLE ENDS HERE -->

<!-- TEMPLATE -->
<section id="main-body">
    <?php

    //importing db
    require __DIR__ . '/../db.php';
    ?>
    <div class="container-fluid">

        <?
        //iterating into db's fetch result
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) : ?>

                <!-- creating columns filled with values received from db's query-->
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