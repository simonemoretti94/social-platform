<style scoped>
    div#col {
        padding: 1rem;

        >div#user {
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
                }

                & span {
                    font-style: italic;
                    font-size: medium;
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

        >div#user:hover {
            background-color: var(--blue-light);
            filter: drop-shadow(0 0 5px var(--violet-dark));

            & span {
                color: var(--dark-light);
            }
        }
    }
</style>

<section id="main-body">
    <?php
    require __DIR__ . '/../db.php';

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) : ?>
            <div id="col" class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div id="user" class="container-fluid">
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
</section>