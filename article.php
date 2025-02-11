<?php

require 'includes/config.php';
$conn = getDB();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

$sql = "SELECT *
        FROM php_www2
        WHERE id = " . $_GET['id'];

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

}
} else {
    $article = null;
}
$my_name = "Joseph";
$title = "Journey to learning PHP";


?>
<?php require 'includes/header.php'; ?>
        <?php if (empty($articles)): ?>
            <p>No articles found</p>
        <?php else: ?>
        <ul>
            <?php foreach ($articles as $article):?>
                <li>
                    <article>
                        <h2><a href="article.php?id=<?= $article["id"]; ?>"><?= $article['title']; ?></a><sub> <?= $article['published_at']; ?></sub></h2>
                        <h3><?= $article['subtitle']; ?></h3>
                        <?= $article['content']; ?></p>
                        <h5><a href="valid.php">Go back</a></h5>
                    </article>
                </li>
                <?php endforeach; ?>
        </ul>
        <?php endif; ?>
<?php require 'includes/footer.php'; ?>