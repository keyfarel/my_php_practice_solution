<?php
global $connection;
include "../connection/db.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "UPDATE users 
              SET username = '$username', password = '$password' 
              WHERE id = $id";

    // Eksekusi query
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

// Tutup koneksi database
mysqli_close($connection);
?>
