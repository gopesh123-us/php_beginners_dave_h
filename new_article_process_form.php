<?php
require "includes/database.php";

if (isset($_POST) && $_SERVER["REQUEST_METHOD"] === "POST") {
    //echo "success";
    #var_dump($_POST);
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST["content"]);
    $published_at = $conn->real_escape_string($_POST["published_at"]);

    $sql = "INSERT INTO article (title, content, published_at)
    VALUES ('$title', '$content', '$published_at')";

    if ($conn->query($sql) === TRUE) {
        echo "new record inserted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
