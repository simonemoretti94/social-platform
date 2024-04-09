<?php //THIS FILE IS EXPORTED ONLY INTO CLASSES-RENDERER.PHP

// 1) QUERYING DB

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


// 2) DEFYINING A CLASS
class posts
{

    //post::$type declaring a static value
    public static $typeClass = 'post';

    //creating a class's constructor
    public function __construct(public int $id, public int $user_id, public string $title, public string $date, public string $tags, public string $created_at)
    {

        //assigning values
        $this->id = $id;
        $this->user_id = $user_id;
        $this->title = $title;
        $this->date = $date;
        $this->tags = $tags;
        $this->created_at = $created_at;
    }


    //function that returns post infos
    public function postInfos()
    {
        return $this->title . ', was created at: ' . $this->created_at;
    }
}

// 3) CREATING n CLASSESS BASED ON DB'S FETCH RESULTS

$posts = array();

if ($result && $result->num_rows > 0) {
    for ($i = 0; $i < 3; $i++) {
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
