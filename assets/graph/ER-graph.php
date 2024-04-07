<!-- this is a template -->

<?php
$headName = 'ER-graph_renderer';

?>

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/../../components/header.php';
?>

<style>
    main {
        display: grid;
        place-content: center;
        overflow-y: scroll;

        & img#graph-1 {
            width: calc(100vw - 40px);
            height: calc(100vh - 120px);
            background-color: white;
            padding: 1rem;
            border-radius: 10px;
            filter: drop-shadow(1px 1.5px 5px #9614dc98);
        }
    }

    #graph-2,
    #graph-3 img {
        max-width: 100%;
    }

    #hr-divider {
        margin: .5rem auto;
        border: solid 2px black;
    }
</style>

<!-- end header -->
<main>
    <sup id="screen_details" style="margin: '.5rem auto .2rem auto;"></sup>
    <img id="graph-1" src="../img/ER-graph.png" alt="er-graph-drawio">
    <div id="graph-2" class="container-fluid m-auto bg-light   flex-column">
        <img src="./responsive-img/1on2_left.png" alt="1on2_left">
        <hr id="hr-divider">
        <img src="./responsive-img/1on2_right.png" alt="1on2_right">
    </div>
    <div id="graph-3" class="container-fluid m-auto bg-light flex-column">
        <img src="./responsive-img/1on3_left.png" alt="1on3_left">
        <hr id="hr-divider">
        <img src="./responsive-img/1on3_center.png" alt="1on3_center">
        <hr id="hr-divider">
        <img src="./responsive-img/1on3_right.png" alt="1on3_right">
    </div>

</main>


<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/../../components/footer.php';
?>
<!-- end footer -->