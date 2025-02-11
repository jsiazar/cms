<?php
require 'includes/header.php';
require 'includes/footer.php';
require 'includes/config.php';
$conn = getDB();
// For loop 

for ($i = 1; $i <= 10; $i = $i + 1) {
    echo $i . ", ";
}


// elseif

$hour = 24;

if ($hour < 12 ) {
    echo "Good morning";
} elseif ($hour < 18 ) {
    echo "Good Afternoon";
} elseif ($hour < 22) {
    echo "Good evening";
} else {
    echo "Good night";
}


// switch 

 $day = "6";

 switch ($day) {
    case "1":
        echo "Monday";
        break;
    case "2":
        echo "Tuesday";
        break;
    case "3":
        echo "Wednesday";
        break;
    case "4":
        echo "Thursday";
        break;
    default:
        echo "No information available";
        break;
}

$array = [];

for ($i = 1; $i <= 10; $i++) {

    if ($i < 4 ) {
        $array [] = "a";
    } elseif ($i >= 4 && $i <= 7) {
        $array [] = "b";
    } else {
        $array []= "c";
    }
}

echo $array[2];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sample </title>
        <link rel="stylesheet" href="style.css">
    </head>
</html>




<!-- $fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <h1>Fruit</h1>

     put your code below this line
    <ol>
        <li><?= $fruit [0]; ?></li>
        <li><?= $fruit [1]; ?></li>
        <li><?= $fruit [2]; ?></li>
        <li><?= $fruit [3]; ?></li>
    </ol>


    </body>
</html> -->



$posts = [1 => 'Good news', 3 => 'Read this', 5 => 'Important announcement'];

?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <title>Posts</title>
    </head>
    <body>

    <h1>Posts</h1>

    <ul>
        <?php foreach($posts as $id => $title): ?>
        
            <li><a href="post.php?id=<?= $id; ?>"><?= $title; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <form action="get">
            <input type="checkbox" name="acknowledged">
            </form>
    </body>
</html>