<?php
global $connection;
include "../connection/db.php";
include "../security/encrypt_password.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $hashed_password = encryptPassword($password);

    $query = "UPDATE users 
              SET username = '$username', password = '$hashed_password' 
              WHERE id = $id";

    if (mysqli_query($connection, $query)) {
        header("Location: ../view/read_view.php?message=UserUpdated");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
} else {
    header("Location: ../view/read_view.php");
    exit();
}

mysqli_close($connection);
?>
