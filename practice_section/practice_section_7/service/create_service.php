<?php
global $connection;
include "../connection/db.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "INSERT INTO users(username, password) 
              VALUES ('$username', '$password')";

    if (mysqli_query($connection, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

} else {
    echo "Form not submitted yet.";
}

mysqli_close($connection);
?>