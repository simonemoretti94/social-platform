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
        overflow-y: scroll;
    }
</style>
<!-- end header -->
<main>
    <sup id="screen_details"></sup>
    <?php
    require_once __DIR__ . '/db.php';
    echo '<div id="db-result">' . var_dump($result) . '</div>' . '<hr><hr>';

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) : ?>
            <!-- Destructuring (verify var_dupm($row))
            ['id' => id, 'name' => name,] = $row; -->
            <div id="user" class="container-fluid"><?php echo var_dump($row) ?></div>
    <?php endwhile;
    } else if ($result) {
        echo '0 results';
    } else {
        echo 'query error';
    };
    ?>
</main>

<!-- importing footer  contains body's close tag -->
<?php
require_once __DIR__ . '/components/footer.php';
?>
<!-- end footer -->