<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    var_dump($_GET);
}
?>
<?php require 'includes/header.php'; ?>
<form action="process_form.php" method="get">Search
    <input type="text"> <br>
    <button id="searchBtn">Search</button>
</form>
<?php require 'includes/footer.php'; ?>
