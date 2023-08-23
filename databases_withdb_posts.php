<?php

use function Safe\mysql_query;

require 'includes/database.php';
#echo "Successfully connected";

$sql = 'SELECT * 
        FROM article 
        ORDER BY id DESC';

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    #var_dump($articles);
}

?>

<?php
require 'includes/header.php';
?>

<?php if (empty($articles)) : ?>
    <p>No articles found</p>
<?php else : ?>
    <div class="container">
        <div class="row mt-4">
            <ol>
                <?php foreach ($articles as $index => $article) : ?>

                    <li>
                        <article>
                            <a href="databases_withdb_singlepost.php?id=<?= $article["id"]; ?>">
                                <h2><?= $article["title"] ?></h2>
                            </a>
                            <p><?= $article["content"] ?></p>
                            <p><?= $article["published_at"] ?></p>
                        </article>
                    </li>

                <?php endforeach; ?>
            </ol>
        </div>
    </div>


<?php endif; ?>

<?php
require 'includes/footer.php';
?>