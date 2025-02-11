<?php

require 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if ($_POST['title'] == '') {
        $errors[] = 'Title is required';
    }
    if ($_POST['subtitle'] == '') {
        $errors[] = 'Subtitle is required';
    }
    if ($_POST['content'] == '') {
        $errors[] = 'Content is required';
    }
    if (empty($errors)) {
    $conn = getDB();

    $sql = "INSERT INTO php_www2 (title, subtitle, content, published_at)
            VALUES ('" . mysqli_escape_string($conn, $_POST['title']) . "','"
                       . mysqli_escape_string($conn, $_POST['subtitle']) . "','"
                       . mysqli_escape_string($conn, $_POST['content']) . "','"
                       . mysqli_escape_string($conn, $_POST['published_at']) . "')";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $id = mysqli_insert_id($conn);
    echo "Inserted record with ID: $id";
        }
    }
}


?>
<?php require 'includes/header.php'; ?>

<h1>Add a new post</h1>

<?php if (! empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">
    <fieldset><div>
        <label for="title">Title</label>: <input type="text" name="title" id="title" placeholder="Post Title">
    </div>
    <br>
    <div>
        <label for="subtitle">Subtitle</label>: <input type="text" name="subtitle" id="subtitle" placeholder="Post Subtitle">
    </div>
    <br>
    <div>
        Content: <textarea name="content" rows="4" cols="40" placeholder="Content"></textarea>
    </div>
    <br>
    <div>
        <label for="published_at">Publication Date and Time</label>
        <input type="datetime-local" name="published_at" id="published_at">
    </div>
    </fieldset>

    <button>Submit</button>
</form>
<h5><a href="valid.php">Go back</a></h5>

<?php require 'includes/footer.php'; ?>
