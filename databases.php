<?php

$articles = [
    [
        "title" => "Secrets of John Woods",
        "author" => "James Patterson"
    ],
    [
        "title" => "Hardy Boys",
        "author" => "Franklin and David"
    ],
    [
        "title" => "Tintin",
        "author" => "Herge"
    ]
];

var_dump($articles);
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <header>
        <h1>My Blog - Data Hardcoded</h1>
    </header>
    <main>
        <ol>
            <?php foreach ($articles as $index => $article) : ?>
                <li>
                    <article>
                        <h2><?php echo $article["title"] ?></h2>
                        <p><?php echo $article["author"] ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ol>
    </main>
</body>

</html>