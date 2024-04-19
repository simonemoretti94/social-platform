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
        /* overflow-y: scroll; */
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

                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }

                >img#card-img:hover {
                    transform: scale(.95);
                    border-radius: 10px;
                }
            }

            #card-header:hover {
                filter: drop-shadow(0 0 6px var(--blue-dark));
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
                background-color: #575a5f7f;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-evenly;

                & span#tag {
                    background: linear-gradient(180deg, black, white, white, white, white, white, black);

                    text-wrap: nowrap;
                    font-family: 'Times New Roman', Times, serif;
                    letter-spacing: 1px;
                    font-weight: 200;

                    cursor: pointer;
                    padding: .5rem;
                    margin: .5rem;
                    border: solid 1px black;
                    border-radius: 5px;

                    text-align: center;

                    @media screen and (max-width: 450px) {
                        font-size: 10px;
                        font-weight: 400;
                    }

                    @media screen and (max-width: 400px) {
                        font-size: 8px;
                        font-weight: 600;
                    }
                }

                & span#tag:hover {
                    background: linear-gradient(90deg, var(--blue-light), var(--blue-dark), var(--blue-light));
                    color: white;
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
                        $tags = json_decode($post->tags); //DECODING ENUM JSON AND ITERATING IN ORDER TO GET TAGS
                        foreach ($tags as $tag) : ?>
                            <?= '<span id="tag" class="col-3">' . $tag . '</span>'; ?><!-- tags -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- <hr id="devider"> -->

    <!-- medias -->
    <!-- <div id="medias-container" class="container">
   
        
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="card p-1">
                <div class="card-header">
                    <img class="card-img-top" src="" alt="sea_img">
                </div>
                <div class="card-body">
                    <p class="card-text"></p> 
                    <p></p>
                </div>
                <div class="card-footer">
                    <p><span></span></p>
                </div>
            </div>
        </div>
    </div> -->

</main>


<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/components/footer.php';
?>
<!-- end footer -->