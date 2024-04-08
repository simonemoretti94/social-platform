<?php
$headName = 'index';
?>

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/components/header.php';
?>

<style scoped>
    main {
        min-height: calc(100vh - 100px);
        max-height: calc(100vh - 100px);
        overflow: hidden;

        >section#wrapper {
            height: calc(100vh - 120px);
            display: flex;
            flex-direction: row;

            & section#sidebar {
                flex: 25%;
                height: 100%;
                border-right: solid 2px white;
                overflow-y: scroll;
            }

            & section#main-body {
                flex: 75%;
                height: 100%;
                overflow-y: scroll;
            }
        }
    }
</style>
<!-- end header -->
<main>
    <sup id="screen_details"></sup>
    <section id="wrapper">
        <?php
        require_once __DIR__ . '/db.php';
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