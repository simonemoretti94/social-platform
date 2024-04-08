<section id="main-body">
    <?php
    require_once __DIR__ . '/../db.php';
    echo '<div id="db-result">' . var_dump($result) . '</div>';

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
</section>