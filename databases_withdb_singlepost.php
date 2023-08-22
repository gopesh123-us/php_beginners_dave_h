<?php

use function Safe\mysql_query;

require  'includes/database.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT * 
        FROM article 
        WHERE id = " . $_GET['id'];

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
        #var_dump($articles);
    }
} else {
    $articles = null;
    echo "<br>";
    echo "not set";
}

?>
<?php require 'includes/header.php'; ?>

<?php if (empty($articles)) : ?>
    <p>No articles found</p>
<?php else : ?>
    <div class="container">
        <div class="row mt-4">
            <ul>
                <?php foreach ($articles as $index => $article) : ?>
                    <li>
                        <article>
                            <h2><?= $article["title"] ?></h2>
                            <p><?= $article["content"] ?></p>
                            <p><?= $article["published_at"] ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>