<?php
global $connection;
include "../connection/db.php";

$query = "SELECT * 
          FROM users";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['password']) . "</td>";
        echo "<td>";
        echo "<a href='../view/update_view.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
        echo "<a href='../service/delete_service.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p class='text-center'>No users found.</p>";
}

mysqli_close($connection);
?>