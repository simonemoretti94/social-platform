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

$sql = 'SELECT * FROM `posts`';
$result = $connection->query($sql);


$connection->close();

class posts
{

    //post::$type
    public static $typeClass = 'post';

    public function __construct(public int $id, public int $user_id, public string $title, public string $date, public string $tags, public string $created_at)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->date = $date;
        $this->tags = $tags;
        $this->created_at = $created_at;
    }

    public function postInfos()
    {
        return $this->title . ', was created at: ' . $this->created_at;
    }
}

$posts = array();

if ($result && $result->num_rows > 0) {
    for ($i = 0; $i < 2; $i++) {
        $row = $result->fetch_assoc();

        array_push($posts, new posts($row['id'], $row['user_id'], $row['title'], $row['date'], $row['tags'], $row['created_at']));
    }
    // while ($row = $result->fetch_assoc()) {
    //     //var_dump($row);
    //     array_push($posts, new posts($row['id'], $row['user_id'], $row['title'], $row['date'], $row['tags'], $row['created_at']));
    // }
} else if ($result) {
    echo '0 results';
} else {
    echo 'query error';
};
