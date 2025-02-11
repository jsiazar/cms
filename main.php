<?php

require 'includes/config.php';

$conn = getDB();

$sql = "SELECT *
FROM php_www2
ORDER BY id";



$results = mysqli_query($conn, $sql);


if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}



$my_name = "Joseph ";
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
                        <h2><a href="article.php?id=<?= $article["id"]; ?>"><?= $article['title']; ?></a><sub><?= $article['published_at']; ?></sub>   </h2>
                        <h3><?= $article['subtitle']; ?></h3>
                        <!--<?= $article['content']; ?></p>-->
                    </article>
                </li>
                <?php endforeach; ?>
        </ul>
        <?php endif; ?>
<div id="submit-form">
 <a href="submit.php"><button class="submit-form">Submit your content here</button></a>
 </div>
 <?php require 'includes/footer.php'; ?>