<?php

require 'includes/config.php';

$conn = getDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

?>

<?php require 'includes/header.php'; ?>
<h1>Sign in with your account</h1>
<form id="loginform" method="post">Username
    <input type="text" name="username"> <br>Password 
    <input type="password" name="password"> <br> <br>
    <button>Send</button>
</form>
<h5><a href="index.php">Go back</a></h5>
<?php require 'includes/footer.php'; ?>
