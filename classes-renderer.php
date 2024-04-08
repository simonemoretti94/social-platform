<!-- this is a template -->

<?php
$headName = 'classes-renderer';

?>

<style scoped>
    body {
        overflow-y: hidden;

        & main {
            min-height: calc(100vh - 100px);
            max-height: calc(100vh - 100px);
            overflow-y: scroll;
        }
    }

    .container {
        overflow-y: scroll;

        div#card {
            #card-header {
                max-height: 300px;

                >img#card-img {
                    max-width: 100%;
                    max-height: 100%;
                }
            }

            /* & #card-body{

            }

            & #card-footer {

            } */
        }
    }
</style>

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/components/header.php';
?>
<!-- end header -->
<main>
    <?php
    require_once __DIR__ . '/models/post.php';
    require_once __DIR__ . '/models/media.php';
    ?>





    <!-- posts -->
    <div class="container">
        <?php
        var_dump($posts);
        ?>

        <?php foreach ($posts as $post) : ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div id="card" class="card p-1">
                    <div id="card-header" class="card-header">
                        <img id="card-img" class="card-img-top" src="https://wallpapercave.com/wp/wp3250456.jpg" alt="sea_img">
                    </div>
                    <div id="card-body" class="card-body">
                        <p class="card-text"><?= $post->title ?></p> <!-- title -->
                        <p><?= $post->date ?></p>
                        </p><!-- date -->
                    </div>
                    <div id="card-footer" class="card-footer">
                        <?php foreach ($post->tags as $tag) : ?>
                            <p><?= '<span>' . $tag . '</span>'; ?></p><!-- tags -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <hr>
    <hr>

    <!-- medias -->
    <div class="container">
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