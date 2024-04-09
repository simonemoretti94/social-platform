<?php
$headName = 'classes-renderer';

?>

<!--STYLE BEGINS HERE-->
<style scoped>
    body#posts-medias {
        overflow-y: hidden;

        & main {
            min-height: calc(100vh - 100px);
            max-height: calc(100vh - 100px);
            overflow-y: scroll;
        }
    }

    div#posts-container,
    div#medias-container {
        overflow-y: scroll;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;

        div#card {
            min-height: 400px;

            #card-header {
                max-height: 300px;

                >img#card-img {
                    max-width: 100%;
                    max-height: 100%;
                }
            }

            & #card-body {
                display: grid;
                place-items: center;

                & #card-title,
                #card-date {
                    text-align: center;
                }

                & #card-title {
                    font-size: small;
                    font-weight: 500;
                }

                & #card-date {
                    font-size: smaller;
                    font-weight: 300;
                }

            }

            & div#card-footer {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-evenly;

                & span {
                    padding: .5rem;
                    margin: .5rem;
                    border: solid 1px black;
                    border-radius: 5px;

                    text-align: center;
                }
            }
        }
    }

    hr#devider {
        border: 0;
        height: 4px;
        margin: 2rem auto;
        background-image: linear-gradient(90deg, black, white, black);
    }
</style>
<!--STYLE ENDS HERE-->

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/components/header.php';
?>
<!-- end header -->
<main>

    <!--IMPORTING FILES WHOSE CONTAINS QUERIES AND CLASSESS -->
    <?php
    require_once __DIR__ . '/models/post.php';
    require_once __DIR__ . '/models/media.php';
    ?>





    <!-- posts -->
    <div id="posts-container" class="container">
        <?php
        //var_dump($posts);
        ?>

        <!--ITERATING INTO POSTS ARRAY -->

        <?php foreach ($posts as $post) : ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 p-2">
                <div id="card" class="card">
                    <div id="card-header" class="card-header">
                        <img id="card-img" class="card-img-top" src="https://wallpapercave.com/wp/wp3250456.jpg" alt="<?= $post->title ?>">
                    </div>
                    <div id="card-body" class="card-body">
                        <p id="card-title" class="card-text"><?= $post->title ?></p> <!-- title -->
                        <p id="card-date"><?= $post->date ?></p>
                        </p><!-- date -->
                    </div>
                    <div id="card-footer" class="card-footer">
                        <?php
                        $tags = json_decode($post->tags); //DECODING ENUM JSON
                        foreach ($tags as $tag) : ?>
                            <?= '<span class="col-3">' . $tag . '</span>'; ?><!-- tags -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <hr id="devider">

    <!-- medias -->
    <div id="medias-container" class="container">
        <?php
        var_dump($medias);
        ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="card p-1">
                <div class="card-header">
                    <img class="card-img-top" src="" alt="sea_img">
                </div>
                <div class="card-body">
                    <p class="card-text"></p> <!-- title -->
                    <p></p><!-- date -->
                </div>
                <div class="card-footer">
                    <p><span></span></p><!-- tags -->
                </div>
            </div>
        </div>
    </div>

</main>


<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/components/footer.php';
?>
<!-- end footer -->