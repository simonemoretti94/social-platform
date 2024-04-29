<?php
$headName = 'classes-renderer';

?>

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
    <div class="row">
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