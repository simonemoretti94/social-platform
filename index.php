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
        width: 100vw;
        overflow: hidden;

        >section#wrapper {
            height: calc(100vh - 120px);
            width: 100vw;
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
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                overflow-y: scroll;
                overflow-x: hidden;
            }
        }



        ::-webkit-scrollbar {
            width: 10px;
            /* scrollbar width */
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-light);
            border-left: solid .25px var(--violet-light);
            /* track's background color */
        }


        ::-webkit-scrollbar-thumb {
            background: var(--violet-light);
            border-radius: 2.5px;
            cursor: grabbing;
            /* scrollbar's handling bg color */
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* scrollbar's handling bg color on hover */
        }
    }
</style>
<!-- end header -->
<main>
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