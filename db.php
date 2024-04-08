<?php

// 1. Defyining constants
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'social-platform');

// 2. Defyining a new connection's instance
$connection = null;
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
//var_dump($connection);

// 3. Checking if an error occurred
if ($connection && $connection->connect_error) {
    echo 'Connection Failed | ' . $connection->connect_error;
    die;
};

// 4. Querying the database
$sql = null;
$result = null;
$row = null;

// query: 5. Ordina gli utenti per totale di likes ricevuti nei loro posts (25);
$sql = 'SELECT `users`.`username` , `users`.`id`, COUNT(`likes`.`post_id`) AS `tot_likes`
FROM `users` JOIN `posts` ON `users`.`id` = `posts`.`user_id`
JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
GROUP BY `users`.`id`
ORDER BY `tot_likes` DESC;';
$result = $connection->query($sql);


$connection->close();
