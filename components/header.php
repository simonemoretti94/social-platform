<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- assets -->
    <?php
    if ($headName != 'ER-graph_renderer') {
        echo '<link rel="stylesheet" type="text/css" href="./assets/css/style.css">' .
            '<script src="./assets/js/script.js" rel="script" defer></script>';
    } else {
        echo
        '<link rel="stylesheet" type="text/css" href="../css/style.css">' .
            '<script src="../js/script.js" rel="script" defer></script>';
    }
    ?>

    <!-- CDN tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title><?php echo $headName ?></title>
</head>

<body id="<? $headName == 'classes-renderer' ? 'posts-medias' : '' ?>">
    <header>
        <div id="img">
            <!-- <a href="./ER-graph.php"><i id="graph_redirect" class="fa fa-cloud"></a></i> -->
            <a href="<?= $headName == 'ER-graph_renderer' ? '../../index.php' : './assets/graph/ER-graph.php' ?>"><i id="graph_redirect" class="fa fa-cloud"></a></i>
            <sub id="graph_text" style="<?= $headName == 'ER-graph_renderer' ? 'display: none;' : 'display: inline-block;' ?>">graph</sub>
        </div>
        <h1 id="h1_header">social-platform</h1>
    </header>

    <style scoped>
        header {
            display: flex;
            place-items: center;
            min-height: 50px;
            background: linear-gradient(180deg, rgb(0, 125, 250), rgb(34, 124, 215), rgb(41, 136, 231), rgb(34, 124, 215), rgb(0, 125, 250));
            border-bottom: solid 1px white;

            >div#img {
                flex: 40%;

                >a {
                    >i {
                        flex: 40%;
                        font-size: 30px;
                        color: white;
                        margin-left: 1rem;
                    }

                }

                & sub#graph_text {
                    color: white;
                    font-weight: 0;
                    font-size: smaller;
                    font-family: Georgia, 'Times New Roman', Times, serif;
                    transform: skewX(-15deg);
                }
            }

            & h1 {
                flex: 60%;
                text-align: left;
                color: white;
            }
        }
    </style>