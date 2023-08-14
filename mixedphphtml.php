<?php
date_default_timezone_set("America/New_York");
$hour = date('H');
echo "Current hour:" . $hour . ":";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mixed HTML and PHP</title>
</head>

<body>
    <h1>Lorem ipsum</h1>
    <?php if ($hour < 12) : ?>
    Good Morning
    <?php elseif ($hour < 18) : ?>
    Good Afternoon
    <?php elseif ($hour < 22) : ?>
    Good Evening
    <?php else : ?>
    Good Night
    <?php endif; ?>
</body>

</html>