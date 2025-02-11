<?php
$message = "Enter your age to access the site";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="includes/style.css">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="includes/favicon.ico">
</head>
<body>

    <h1><?php echo $message; ?></h1>

    <form action="valid.php" method="post">
    Age: <input required type="number" name="age"><br>
    <button>Submit</button>
    </form>

</body>
<?php require 'includes/footer.php'; ?>
</html>