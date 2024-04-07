<?php

define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'social-platform');

$connection = null;

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

var_dump($connection);

if ($connection && $connection->connect_error) {
    echo 'Dataabase Connection Faild' . $connection->connect_error;
    die;
}

$sql = null;
$result = null;
$row = null;

$sql = 'phpMyAdmin sql command';
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) {
    //['id' => id, 'name' => name, 'website' => website] = row;
}
