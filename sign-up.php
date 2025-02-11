<?php
require 'includes/header.php';
require 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if ($_POST['fullname'] == '') {
        $errors[] = 'Fullname is required';
    }
    if ($_POST['email'] == '') {
        $errors[] = 'email is required';
    }
    if ($_POST['username'] == '') {
        $errors[] = 'Username is required';
    }
    if ($_POST['email'] == '') {
        $errors[] = 'Password is required';
    }
    if (empty($errors)) {
    $conn = getDB();

    $sql =  "INSERT INTO `php_users`(`fullname`, `email`, `username`, `password`) 
                VALUES ('" . mysqli_escape_string($conn, $_POST['fullname']) . "','"
                           . mysqli_escape_string($conn, $_POST['email']) . "','"
                           . mysqli_escape_string($conn, $_POST['username']) . "','"
                           . mysqli_escape_string($conn, $_POST['password']) . "')";

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

<h1>Create Account</h1>
<form action="sign-up.php" method="post">
    <div id="sign-up">
        Full Name: <input type="text" name="full-name" required>
    <div>
        Email Address <input type="email" name="email" required>
    
    <div>
        Username: <input type="text" name="username" required> 

    <div>
        Create your password: <input type="password" name="password" required>
    </div>
    </div>
    </div> 
    </div><br>
    <button>Create Account</button>
</form>

<?php require 'includes/footer.php'; ?>