<style scoped>
    div#col {
        padding: 1rem;

        >div#user {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
    }
</style>

<section id="main-body">
    <?php
    require __DIR__ . '/../db.php';

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) : ?>
            <!-- Destructuring (verify var_dupm($row))
            ['id' => id, 'name' => name,] = $row; -->
            <div id="col" class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div id="user" class="container-fluid"><?php echo var_dump($row) ?></div>
            </div>
    <?php endwhile;
    } else if ($result) {
        echo '0 results';
    } else {
        echo 'query error';
    };
    ?>
</section>