<!-- this is a template -->

<?php
$headName = 'ER-graph_renderer';

?>

<!-- importing header: contains body'open tag -->
<?php
require_once __DIR__ . '/../../components/header.php';
?>

<!-- STYLE BEGINS HERE -->
<style>
    main {
        display: grid;
        place-content: center;
        overflow-y: scroll;

        >sup {
            cursor: pointer;
        }

        & img#graph-1 {
            width: calc(100vw - 40px);
            height: calc(100vh - 120px);
            background-color: white;
            padding: 1rem;
            border-radius: 10px;
            filter: drop-shadow(1px 1.5px 5px #9614dc98);
        }
    }

    #graph-2 img,
    #graph-3 img {
        max-width: 100%;
    }

    .flex-column {
        display: flex;
        flex-direction: column;

        & img {
            flex: 100%;
            padding: 1rem;
        }
    }

    #hr-divider {
        margin: .5rem auto;
        border: solid 2px black;
    }
</style>
<!-- STYLE ENDS HERE -->

<!-- end header -->
<main>
    <!-- BEHAVIOUR DETERMINED INTO EXTERNAL JS FILE -->

    <sup id="screen_details" style="margin: '.5rem auto .2rem auto;"></sup>

    <!-- the img tag below appears only at vw greater than 800px -->
    <img id="graph-1" src="../img/ER-graph.png" alt="er-graph-drawio">

    <!-- the div below appears only at vw lesser than 800px and greater than 550px -->
    <div id="graph-2" class="container-md m-auto bg-light   flex-column">
        <img src="./responsive-img/1on2_left.png" alt="1on2_left">
        <hr id="hr-divider">
        <img src="./responsive-img/1on2_right.png" alt="1on2_right">
    </div>

    <!-- the div below appears only at vw lesser than 550px -->
    <div id="graph-3" class="container-md m-auto bg-light flex-column">
        <img src="./responsive-img/1on3_left.png" alt="1on3_left">
        <hr id="hr-divider">
        <img src="./responsive-img/1on3_center.png" alt="1on3_center">
        <hr id="hr-divider">
        <img src="./responsive-img/1on3_right.png" alt="1on3_right">
    </div>

</main>

<!-- this script clears DOM when mounted  -->
<script>
    const graph_2 = document.getElementById('graph-2');
    const graph_3 = document.getElementById('graph-3');
    document.addEventListener('DOMContentLoaded', (e) => {
        graph_2.style.display = 'none';
        graph_3.style.display = 'none';
    });
</script>


<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/../../components/footer.php';
?>
<!-- end footer -->