<?php
global $connection;
include "../connection/db.php";
include "../security/encrypt_password.php";

if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($connection, $_POST["username"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);

    $hashed_password = encryptPassword($password);

    $query = "INSERT INTO users(username, password) 
              VALUES ('$username', '$hashed_password')";

    if (mysqli_query($connection, $query)) {
        echo "New record created successfully";
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

} else {
    echo "Form not submitted yet.";
}

mysqli_close($connection);
?>
