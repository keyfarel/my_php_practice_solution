<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "crud_php";

$connection = mysqli_connect($host, $user, $password, $dbname);

if (!$connection) {
    die("Connection failed, " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>
