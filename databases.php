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

//var_dump($articles);
?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <header>
        <h1>My Blog - Data</h1>
        <h2>Data shown below is hardcoded</h2>
    </header>
    <main>
        <ol>
            <?php foreach ($articles as $index => $article) : ?>
                <li>
                    <article>
                        <h2><?= $article["title"]; ?></h2>
                        <p><?= $article["author"]; ?></p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ol>
    </main>
</body>

</html>