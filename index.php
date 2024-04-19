<?php
$headName = 'index';
?>

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/components/header.php';
?>

<!-- end header -->
<main id="index-main">
    <sup id="screen_details"></sup>
    <section id="wrapper">
        <?php
        //sidebar
        require_once __DIR__ . '/components/sidebar.php';
        //main body
        require_once __DIR__ . '/components/mainBody.php';
        ?>
    </section>
</main>

<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/components/footer.php';
?>
<!-- end footer -->