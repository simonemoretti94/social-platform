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

$sql = 'SELECT * FROM `medias`';
$result = $connection->query($sql);


$connection->close();

// 2) DEFYINING A CLASS
class medias
{

    //media::$type declaring a static value
    public static $typeClass = 'media';


    //creating a class's constructor
    public function __construct(public int $id, public int $user_id, public string $type, public string $path, public string $created_at)
    {

        //assigning values
        $this->id = $id;
        $this->user_id = $user_id;
        $this->type = $type;
        $this->path = $path;
        $this->created_at = $created_at;
    }


    //function that returns media infos
    public function mediaInfos()
    {
        return 'this media id:' . $this->id . ', was created by user: ' . $this->user_id;
    }
}

// 3) CREATING n CLASSESS BASED ON DB'S FETCH RESULTS

$medias = array();

if ($result && $result->num_rows > 0) {
    for ($i = 0; $i < 2; $i++) {
        $row = $result->fetch_assoc();
        array_push($medias, new medias($row['id'], $row['user_id'], $row['type'], $row['path'], $row['created_at']));
    }
} else if ($result) {
    echo '0 results';
} else {
    echo 'query error';
};
// 'id' => string '1' (length=1)
// 'user_id' => string '1' (length=1)
// 'type' => string 'photo' (length=5)
// 'path' => string 'path/5a984076-6618-4672-b1db-2b38e05b3cf9.jpg' (length=45)
// 'created_at' => string '2024-04-05 12:00:16' (length=19)
// 'updated_at' => null