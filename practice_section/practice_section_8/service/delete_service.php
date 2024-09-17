<?php
global $connection;
include "../connection/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM users 
              WHERE id = $id";

    if (mysqli_query($connection, $query)) {
        header("Location: ../view/read_view.php?message=UserDeleted");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }

} else {
    header("Location: ../view/read_view.php");
    exit();
}

mysqli_close($connection);
?>