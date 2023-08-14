<?php
var_dump($_GET);
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>HTML Document</title>
</head>

<body>
    <p><?= $_SERVER["REQUEST_METHOD"]; ?></p>
    <?php
    if (isset($_POST['search'])) {
        echo $_POST['search'] . ':POST' . '<br>';
        var_dump($_POST);
    } elseif (isset($_GET['search'])) {
        echo $_GET['search'] . ':GET' . '<br>';
        var_dump($_GET);
        var_dump($_SERVER["QUERY_STRING"]);
    } else {
        echo 'neither variables are set';
    }
    ?>
    <br>
    <a href="form.php">Go back to form.php</a>
    <br>
    <a href="form2.php">Go back to form2.php</a>
</body>

</html>