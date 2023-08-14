<?php

$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Fruit</title>
</head>

<body>

    <h1>Fruit</h1>

    <ol>
        <?php
        foreach ($fruit as $index => $theFruit) : ?>
            <li><?php echo $theFruit; ?></li>
        <?php endforeach; ?>
    </ol>

</body>

</html>