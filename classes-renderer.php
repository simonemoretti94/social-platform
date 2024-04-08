<!-- this is a template -->

<?php
$headName = 'classes-renderer';

?>

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

    <?php
    var_dump($posts);

    ?>

</main>


<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/components/footer.php';
?>
<!-- end footer -->