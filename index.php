<?php
$headName = 'index';
?>

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/components/header.php';
?>
<!-- end header -->
<main>
    <sup id="screen_details"></sup>
    <?php
    require_once __DIR__ . '/db.php';
    echo '<div id="db-result">' . var_dump($result) . '</div>'
    ?>
</main>

<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/components/footer.php';
?>
<!-- end footer -->