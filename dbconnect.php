<?php

use function Safe\mysql_query;

$db_host = "localhost:3306";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "Guruji123$";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

#echo "Successfully connected";

$sql = 'SELECT * 
        FROM article 
        ORDER BY published_at';

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    var_dump($articles);
}
