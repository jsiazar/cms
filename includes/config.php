<?php

function getDB()
{
$db_host = "localhost";
$db_name = "ohsia_onephp_training";
$db_user = "ohsia_onephp_training";
$db_pass = 'yRm).FGZBn3fWeLn';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
 }
 return $conn;
}