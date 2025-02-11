<?php

$underage = "Sorry, you are not allowed to access the site";

$age = $_POST['age']; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="includes/style.css">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="includes/favicon.ico">
</head>

<body>

    <h1><?php if ($_POST['age'] >= 18): include_once 'main.php';?>
        <?php else: echo $underage;?></h1>
    <?php endif ?>
</body>

</html>